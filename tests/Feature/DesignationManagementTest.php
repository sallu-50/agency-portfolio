<?php

namespace Tests\Feature;

use App\Models\Designation;
use App\Models\TeamMember;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class DesignationManagementTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();
        $this->seed();
    }

    public function test_designation_can_be_created_with_custom_order_number(): void
    {
        $designation = Designation::create([
            'name' => 'Chief Technology Officer',
            'rank' => 2,
        ]);

        $this->assertDatabaseHas('designations', [
            'id' => $designation->id,
            'name' => 'Chief Technology Officer',
            'rank' => 2,
        ]);
    }

    public function test_team_member_adopts_rank_from_assigned_designation(): void
    {
        $designation = Designation::create([
            'name' => 'VP of Engineering',
            'rank' => 3,
        ]);

        $member = TeamMember::create([
            'name' => 'Rahim Chowdhury',
            'designation_id' => $designation->id,
            'department_badge' => 'Engineering',
            'badge_color' => 'blue',
            'category' => 'leadership',
        ]);

        $this->assertEquals('VP of Engineering', $member->role);
        $this->assertEquals(3, $member->designation_rank);
    }

    public function test_updating_designation_order_number_automatically_updates_team_members(): void
    {
        $designation = Designation::create([
            'name' => 'Data Quality Specialist',
            'rank' => 9,
        ]);

        $member = TeamMember::create([
            'name' => 'Karim Ullah',
            'designation_id' => $designation->id,
            'department_badge' => 'QA',
            'category' => 'qa',
        ]);

        $this->assertEquals(9, $member->designation_rank);

        // Update the rank of the designation to rank 2
        $designation->update(['rank' => 2]);

        $member->refresh();
        $this->assertEquals(2, $member->designation_rank);
    }

    public function test_team_page_renders_members_in_order_of_designation_ranks(): void
    {
        // Wipe existing members to cleanly test ordering
        TeamMember::query()->delete();

        $topDesignation = Designation::create(['name' => 'Chairman', 'rank' => 1]);
        $midDesignation = Designation::create(['name' => 'Lead Architect', 'rank' => 4]);
        $juniorDesignation = Designation::create(['name' => 'Junior Annotator', 'rank' => 8]);

        $junior = TeamMember::create([
            'name' => 'Zubair Junior',
            'designation_id' => $juniorDesignation->id,
            'category' => 'general',
            'is_active' => true,
        ]);

        $top = TeamMember::create([
            'name' => 'Anis Chairman',
            'designation_id' => $topDesignation->id,
            'category' => 'general',
            'is_active' => true,
        ]);

        $mid = TeamMember::create([
            'name' => 'Mid Architect',
            'designation_id' => $midDesignation->id,
            'category' => 'general',
            'is_active' => true,
        ]);

        $response = $this->get(route('team'));
        $response->assertStatus(200);

        $content = $response->getContent();
        $topPos = strpos($content, 'Anis Chairman');
        $midPos = strpos($content, 'Mid Architect');
        $juniorPos = strpos($content, 'Zubair Junior');

        $this->assertNotFalse($topPos);
        $this->assertNotFalse($midPos);
        $this->assertNotFalse($juniorPos);

        $this->assertTrue($topPos < $midPos, 'Chairman (#1) must appear before Lead Architect (#4)');
        $this->assertTrue($midPos < $juniorPos, 'Lead Architect (#4) must appear before Junior Annotator (#8)');
    }

    public function test_authenticated_admin_can_access_filament_designations_page(): void
    {
        $admin = User::first();

        $response = $this->actingAs($admin)->get('/admin/designations');
        $response->assertStatus(200);
        $response->assertSee('Designations');
    }

    public function test_member_without_image_gets_man_avatar_when_selected(): void
    {
        $member = TeamMember::create([
            'name' => 'Male Candidate',
            'role' => 'Data Annotator',
            'gender' => 'man',
            'image' => null,
            'category' => 'general',
            'is_active' => true,
        ]);

        $this->assertStringContainsString('avatar-man', $member->image_url);
    }

    public function test_member_without_image_gets_woman_avatar_when_selected(): void
    {
        $member = TeamMember::create([
            'name' => 'Female Candidate',
            'role' => 'QA Lead',
            'gender' => 'women',
            'image' => null,
            'category' => 'general',
            'is_active' => true,
        ]);

        $this->assertStringContainsString('avatar-women', $member->image_url);
    }

    public function test_member_with_uploaded_image_uses_custom_image_instead_of_avatar(): void
    {
        $member = TeamMember::create([
            'name' => 'Custom Photo Member',
            'role' => 'CEO',
            'gender' => 'women',
            'image' => 'team/custom-photo.jpg',
            'category' => 'general',
            'is_active' => true,
        ]);

        $this->assertStringContainsString('team/custom-photo.jpg', $member->image_url);
        $this->assertStringNotContainsString('avatar-women', $member->image_url);
    }

    public function test_team_page_renders_man_and_woman_avatars(): void
    {
        TeamMember::query()->delete();

        TeamMember::create([
            'name' => 'John Without Image',
            'role' => 'Team Lead',
            'gender' => 'man',
            'image' => null,
            'category' => 'general',
            'is_active' => true,
        ]);

        TeamMember::create([
            'name' => 'Jane Without Image',
            'role' => 'QA Lead',
            'gender' => 'women',
            'image' => null,
            'category' => 'general',
            'is_active' => true,
        ]);

        $response = $this->get(route('team'));
        $response->assertStatus(200);
        $response->assertSee('avatar-man');
        $response->assertSee('avatar-women');
    }
}

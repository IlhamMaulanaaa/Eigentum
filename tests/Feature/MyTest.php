<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Unit;
use App\Models\Specification;

class MyTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function testUnitHasSpecifications()
{
    // Create a unit with specifications
    $unit = Unit::factory()->create();
    $specifications = Specification::factory()->count(3)->create([
        'unit_id' => $unit->id,
    ]);

    // Retrieve the unit's specifications
    $unitSpecifications = $unit->specifications;

    // Assert that the unit has the correct number of specifications
    $this->assertCount(3, $unitSpecifications);

    // Assert that each specification belongs to the unit
    foreach ($specifications as $specification) {
        $this->assertTrue($unitSpecifications->contains($specification));
    }
}

}

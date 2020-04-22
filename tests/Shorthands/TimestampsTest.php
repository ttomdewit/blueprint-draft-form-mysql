<?php


namespace Tests\Shorthands;

use BlueprintDraftFromMySQLSource\BlueprintDraftGenerator;
use Tests\TestCase;

class TimestampsTest extends TestCase
{
    public function test_it_converts_created_and_updated_timestamps_to_shorthand(): void
    {
        // Given
        $table = $this->getTable('users');

        // When
        $generator = new BlueprintDraftGenerator();

        // Then
        $this->assertEquals(
            [
                'User' => [
                    'name' => 'string',
                    'timestamps' => 'timestamps',
                ],
            ],
            $generator->generateModelDefinitionForTable($table)
        );
    }
}
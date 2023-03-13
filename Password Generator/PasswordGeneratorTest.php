<?php

namespace Tests\Unit\App\Http\Livewire;

use App\Http\Livewire\PasswordGenerator;
Use Tests\TestCase;

class PasswordGeneratorTest extends TestCase
{
    private PasswordGenerator $passwordGenerator;

    protected function setUp(): void
    {
        $this->passwordGenerator = new PasswordGenerator();
    }

    /**
     * @dataProvider generatePasswordProvider
     */
    public function testGeneratePassword($length, $expected): void
    {
        $this->passwordGenerator->generatePassword($length);
        $this->assertEquals($expected, $this->passwordGenerator->password);
    }

    public function generatePasswordProvider(): array
    {
        return [[8, '!@#$%^*'], [10, '!@#$%^*'], [12, '!@#$%^*'], [14, '!@#$%^*']];
    }
}

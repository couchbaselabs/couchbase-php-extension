<?php

/*
 * Copyright 2022-Present Couchbase, Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

declare(strict_types=1);

namespace Couchbase\StellarNebula;

class AppendOptions
{
    private ?int $timeoutMilliseconds = null;
    private string|int|null $cas = null;
    private ?string $durabilityLevel = null;
    /**
     * @var null|array|int[]
     */
    private ?array $legacyDurability = null;

    /**
     * Static helper to keep code more readable
     *
     * @return AppendOptions
     * @since 4.0.0
     */
    public static function build(): AppendOptions
    {
        return new AppendOptions();
    }

    /**
     * Sets the operation timeout in milliseconds.
     *
     * @param int $milliseconds the operation timeout to apply
     *
     * @return AppendOptions
     * @since 4.0.0
     */
    public function timeout(int $milliseconds): AppendOptions
    {
        $this->timeoutMilliseconds = $milliseconds;
        return $this;
    }

    /**
     * @param string $level see DurabilityLevel enumeration
     */
    public function durabilityLevel(string $level): AppendOptions
    {
        $this->durabilityLevel = $level;
        return $this;
    }

    public function durability(int $replicateTo, int $persistTo): AppendOptions
    {
        $this->legacyDurability = [
            'replicate_to' => $replicateTo,
            'persist_to' => $persistTo,
        ];
        return $this;
    }

    public function cas(string $cas): AppendOptions
    {
        $this->cas = $cas;
        return $this;
    }

    public static function export(?AppendOptions $options): array
    {
        if ($options == null) {
            return [];
        }
        return [
            'timeoutMilliseconds' => $options->timeoutMilliseconds,
            'cas' => $options->cas,
            'durabilityLevel' => $options->durabilityLevel,
            'legacyDurability' => $options->legacyDurability,
        ];
    }
}

<?php
declare(strict_types=1);
// SPDX-FileCopyrightText: Chris Larsson <chris_larsson@outlook.com>
// SPDX-License-Identifier: AGPL-3.0-or-later

namespace OCA\WhatToDo\Tests\Unit\Controller;

use OCA\WhatToDo\Controller\NoteApiController;

class NoteApiControllerTest extends NoteControllerTest {
	public function setUp(): void {
		parent::setUp();
		$this->controller = new NoteApiController($this->request, $this->service, $this->userId);
	}
}

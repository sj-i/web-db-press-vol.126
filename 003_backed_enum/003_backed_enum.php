<?php

declare(strict_types=1);

// stringと紐付くEnum
enum Status: string {
    case Success = 'success';
    case Failed = 'failed';
}
echo Status::Success->value; // 'success'
Status::Success === Status::from('success'); // true

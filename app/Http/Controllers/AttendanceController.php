<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class AttendanceController extends Controller
{
    public function getLast7DaysHours(Request $request)
    {
        // Retrieve the user key from the session
        $userKey = Session::get("User");

        // Query the database for the last 7 days' attendance records
        $attendanceRecords = DB::table('attendances')
            ->select(DB::raw('time_out, time_in, TIMESTAMPDIFF(SECOND, time_in, time_out) as difference'))
            ->where('userkey', $userKey)
            ->orderBy('aid', 'desc')
            ->limit(7)
            ->get();

        $hours = [];

        foreach ($attendanceRecords as $record) {
            $difference = $record->difference;
            if ($difference > 0) {
                $hours[] = round($difference / 3600, 2);
            } else {
                $hours[] = 0;
            }
        }

        // Convert the hours array to a comma-separated string
        $hoursString = implode(', ', $hours);

        // Return the hours string (or you can return as a JSON response or view)
        return $hoursString;
    }
}

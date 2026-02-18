<?php

namespace Database\Seeders;

use App\Models\Employee;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $employees = [
            // Veterans: 5+ years AND active → should be flagged GREEN
            [
                'name' => 'Ananya Sharma',
                'email' => 'ananya.sharma@zylu.com',
                'phone' => '+91 98765 43210',
                'position' => 'Senior Flutter Developer',
                'department' => 'Engineering',
                'join_date' => '2018-03-15',
                'is_active' => true,
            ],
            [
                'name' => 'Rajesh Patel',
                'email' => 'rajesh.patel@zylu.com',
                'phone' => '+91 87654 32109',
                'position' => 'Lead Backend Developer',
                'department' => 'Engineering',
                'join_date' => '2017-07-01',
                'is_active' => true,
            ],
            [
                'name' => 'Priya Nair',
                'email' => 'priya.nair@zylu.com',
                'phone' => '+91 76543 21098',
                'position' => 'Product Manager',
                'department' => 'Product',
                'join_date' => '2019-01-10',
                'is_active' => true,
            ],
            [
                'name' => 'Mohammed Ali',
                'email' => 'mohammed.ali@zylu.com',
                'phone' => '+971 50 123 4567',
                'position' => 'Regional Manager - UAE',
                'department' => 'Operations',
                'join_date' => '2020-06-20',
                'is_active' => true,
            ],
            [
                'name' => 'Deepika Reddy',
                'email' => 'deepika.reddy@zylu.com',
                'phone' => '+91 65432 10987',
                'position' => 'QA Lead',
                'department' => 'Quality Assurance',
                'join_date' => '2016-11-05',
                'is_active' => true,
            ],
            [
                'name' => 'Sanjay Mehta',
                'email' => 'sanjay.mehta@zylu.com',
                'phone' => '+91 54321 09876',
                'position' => 'DevOps Engineer',
                'department' => 'Engineering',
                'join_date' => '2019-09-12',
                'is_active' => true,
            ],

            // Active but LESS than 5 years → should NOT be flagged green
            [
                'name' => 'Fatima Khan',
                'email' => 'fatima.khan@zylu.com',
                'phone' => '+966 55 678 9012',
                'position' => 'UI/UX Designer',
                'department' => 'Design',
                'join_date' => '2023-02-14',
                'is_active' => true,
            ],
            [
                'name' => 'Arjun Patil',
                'email' => 'arjun.patil@zylu.com',
                'phone' => '+91 43210 98765',
                'position' => 'Junior Developer',
                'department' => 'Engineering',
                'join_date' => '2024-08-01',
                'is_active' => true,
            ],
            [
                'name' => 'Lim Wei Ting',
                'email' => 'weiting.lim@zylu.com',
                'phone' => '+65 9123 4567',
                'position' => 'Regional Manager - Singapore',
                'department' => 'Operations',
                'join_date' => '2023-11-25',
                'is_active' => true,
            ],
            [
                'name' => 'Kavita Joshi',
                'email' => 'kavita.joshi@zylu.com',
                'phone' => '+91 32109 87654',
                'position' => 'Marketing Specialist',
                'department' => 'Marketing',
                'join_date' => '2024-01-08',
                'is_active' => true,
            ],
            [
                'name' => 'Rohan Das',
                'email' => 'rohan.das@zylu.com',
                'phone' => '+91 21098 76543',
                'position' => 'Flutter Developer',
                'department' => 'Engineering',
                'join_date' => '2025-04-15',
                'is_active' => true,
            ],

            // Inactive employees with 5+ years → should NOT be flagged green
            [
                'name' => 'Vikram Singh',
                'email' => 'vikram.singh@zylu.com',
                'phone' => '+91 10987 65432',
                'position' => 'Former CTO',
                'department' => 'Engineering',
                'join_date' => '2015-01-01',
                'is_active' => false,
            ],
            [
                'name' => 'Sneha Kapoor',
                'email' => 'sneha.kapoor@zylu.com',
                'phone' => '+91 09876 54321',
                'position' => 'Senior Designer',
                'department' => 'Design',
                'join_date' => '2018-05-20',
                'is_active' => false,
            ],

            // Inactive and less than 5 years → should NOT be flagged green
            [
                'name' => 'Amit Verma',
                'email' => 'amit.verma@zylu.com',
                'phone' => '+91 98712 34567',
                'position' => 'Content Writer',
                'department' => 'Marketing',
                'join_date' => '2024-03-10',
                'is_active' => false,
            ],
            [
                'name' => 'Nisha Gupta',
                'email' => 'nisha.gupta@zylu.com',
                'phone' => '+91 87612 34567',
                'position' => 'Intern',
                'department' => 'Engineering',
                'join_date' => '2025-09-01',
                'is_active' => false,
            ],
        ];

        foreach ($employees as $employee) {
            Employee::create($employee);
        }
    }
}

<?php

namespace App\Console\Commands;

use App\Models\Employee;
use Illuminate\Console\Command;

class DataSelect extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:data-select';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $employees = Employee::where('age', '>', 30)->get();
        foreach ($employees as $employee) {
            echo $employee->firstname . "\n";
        };
    }
}

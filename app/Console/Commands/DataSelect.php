<?php

namespace App\Console\Commands;

use App\Models\Employee;
use App\Models\People;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

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

        $employees = DB::table('employees')
            ->distinct('firstname')
            ->get(['firstname']);

        foreach ($employees as $employee) {
            echo $employee->firstname . "\n";
        };

    }
}

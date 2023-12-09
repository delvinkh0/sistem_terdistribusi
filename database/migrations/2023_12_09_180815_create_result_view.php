<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::statement('CREATE VIEW result_view AS SELECT
        t.test_name AS test_name,
        tr.result_name AS result_name,
        tr.result_description AS result_description,
        tr.result_solution,
        SUM(o.value) AS result,
        tr.first_limit,
        tr.end_limit,
        tr.max_score,
        u.id AS user_id,
        ua.datenow
    FROM
        user AS u
    INNER JOIN user_answers AS ua ON u.id = ua.user_id
    INNER JOIN options AS o ON ua.options_id = o.id
    INNER JOIN questions AS q ON ua.questions_id = q.id
    INNER JOIN test AS t ON q.test_id = t.id
    INNER JOIN testresults AS tr ON t.id = tr.test_id
    GROUP BY
        u.id,
        ua.datenow,
        tr.result_name,
        t.test_name,
        tr.result_solution,
        tr.result_description,
        tr.first_limit,
        tr.max_score,
        tr.end_limit
    HAVING SUM(o.value) BETWEEN tr.first_limit AND tr.end_limit;');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('result_view');
    }
};

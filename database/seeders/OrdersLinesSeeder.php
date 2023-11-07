namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\OrderLine;

class OrdersLinesSeeder extends Seeder
{
    public function run()
    {
        OrderLine::factory(20)->create();
    }
}
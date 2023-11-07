namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Order;

class OrdersSeeder extends Seeder
{
    public function run()
    {
        Order::factory(20)->create();
    }
}
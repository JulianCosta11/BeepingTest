namespace Database\Factories;

use App\Models\OrderLine;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderLineFactory extends Factory
{
    protected $model = OrderLine::class;

    public function definition()
    {
        return [
            'qty' => $this->faker->numberBetween(1, 10),
        ];
    }
}
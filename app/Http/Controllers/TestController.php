class TestController extends Controller
{
    public function index()
    {
        $no_hp = "08123456789";
        $pesan = "Hello World";
        $wa = WablasTrait::sendMessage($no_hp, $pesan);
        if ($wa['error']) return echo "Error!";
        return echo "Successfully sent the message to " . $no_hp . "!";
    }
}

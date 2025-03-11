<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Car;
use App\Models\Booking;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\BookingRequest;

class CarController extends Controller
{
    public function index(Request $request)
    {
        $cars = Car::where('status', 1);

        if ($request->category_id && $request->penumpang) {
            $cars = $cars->Where('type_id', $request->category_id)->Where('penumpang', '>=', $request->penumpang);
        }

        $cars = $cars->get();
        return view('frontend.car.index', compact('cars'));
    }

    public function show(Car $car)
    {
        return view('frontend.car.show', compact('car'));
    }

    public function store(BookingRequest $request)
    {
        // Simpan data ke database
        $booking = Booking::create($request->validated());

        // Ambil nama mobil
        $car = Car::find($request->car_id);

        // Tambahkan log untuk memastikan bahwa mobil ditemukan
        if (!$car) {
            \Log::error('Car not found for ID: ' . $request->car_id);
            return redirect()->back()->withErrors(['Car not found.']);
        } else {
            \Log::info('Car found: ' . $car->name);
        }

        // Siapkan URL WhatsApp dengan format baru
        $waMessage = "Halo Admin Podarent saya ingin memesan mobil,\n\n" .
                     "Nama = " . $request->nama_lengkap . ",\n" .
                     "Ingin memesan mobil = " . $car->name . ",\n" .
                     "Untuk tanggal = " . $request->hari_tanggal_pakai . "\n" .
                     "Pukul = " . $request->jam_pakai . "\n" .
                     "Hingga = " . $request->tanggal_selesai . "\n" .
                     "Pukul = " . $request->jam_selesai . ".\n" .
                     "Area pemakaian = " . $request->area_pemakaian . ".\n" .
                     "Diambil/diantar ke = " . $request->diambil_diantar_ke . ".\n" .
                     "Alamat = " . $request->alamat_lengkap . ".\n" .
                     "No. WA = " . $request->nomer_wa . ".";

        $waUrl = 'https://wa.me/628112039111?text=' . urlencode($waMessage);

        // Redirect ke WhatsApp URL
        return redirect()->away($waUrl)->with('message', 'Data berhasil diinput dan akan dialihkan ke WhatsApp.');
    }
}

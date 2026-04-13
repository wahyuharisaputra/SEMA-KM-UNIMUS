<?php
require __DIR__ . '/../vendor/autoload.php';
$app = require_once __DIR__ . '/../bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

use App\Models\ProgramKerja;
use Illuminate\Support\Facades\Storage;

$agenda = ProgramKerja::where('nama', 'like', '%WORKSHOP PEMILU%')->first();
if ($agenda && $agenda->fotos) {
    $fotos = $agenda->fotos;
    // Identifikasi foto miring (biasanya ukuran paling besar atau yg kedua)
    // Berdasarkan info sebelumnya: agendas/mFOCqxINz3xsHGcWynOS1HCOPHQYIZ10Lup6wUvK.jpg
    $target = 'agendas/mFOCqxINz3xsHGcWynOS1HCOPHQYIZ10Lup6wUvK.jpg';
    
    if (($key = array_search($target, $fotos)) !== false) {
        unset($fotos[$key]);
        $agenda->update(['fotos' => array_values($fotos)]);
        if (Storage::disk('public')->exists($target)) {
            Storage::disk('public')->delete($target);
            echo "Successfully deleted: " . $target;
        } else {
            echo "File not found in storage but removed from DB.";
        }
    } else {
        echo "Target photo not found in agenda: " . $target;
    }
} else {
    echo "Agenda or photos not found.";
}

<?php

namespace App\Livewire;

use App\Models\Service;
use App\Models\ServiceDetail;
use Livewire\Component;
use App\Models\ServiceList;
use App\Models\ServiceName;
use Livewire\WithFileUploads;

class ServiceInput extends Component
{
    use WithFileUploads;

    public $image;
    public $name_id;
    public $name_en;
    public $list_id;
    public $list_en;
    public $description_id;
    public $description_en;

    public function store() {
        // rules validation
        $rules = [
            "image" => "required|image|max:1024",
            "name_id" => "required|min:3",
            "name_en" => "nullable|min:3",
            "list_id" => "required|min:3",
            "list_en" => "nullable|min:3",
            "description_id" => "required|min:3",
            "description_en" => "nullable|min:3",
        ];

        // Message validation
        $message = [
            "image.required" => "Wajib memasukan gambar",
            "name_id.required" => "Wajib memasukan nama layanan",
        ];

        // variable validasi
        $this->validate($rules, $message);

        // get extention image, and lower, replace name
        $imageExtention = $this->image->extension();
        $lowerName = strtolower($this->name_id);
        $replaceName = str_replace(' ', '-', $lowerName);
        $imageFile = $replaceName.'.'.$imageExtention;

        // simpan data dari inputan "image" ke db services
        $service = Service::create([
            "title" => $this->name_id,
            "image" => $this->image->storeAs("services", $imageFile),
        ]);
        $service->id;

        // Simpan data dari inputan "name_id" ke db service_names
        if ($this->name_id != '') {
            ServiceName::create([
                'service_id' => $service->id,
                'name'=> $this->name_id,
                'lang'=> 'id_ID',
            ]);
        }

        // Simpan data dari inputan "name_en" ke db service_names
        if ($this->name_en != '') {
            ServiceName::create([
                'service_id' => $service->id,
                'name'=> $this->name_en,
                'lang'=> 'en_GB',
            ]);
        }

        // Simpan data dari inputan "list_id" ke db service_lists
        if ($this->list_id != '') {
            ServiceList::create([
                'service_id' => $service->id,
                'list'=> $this->list_id,
                'lang'=> 'id_ID',
            ]);
        }

        // Simpan data dari inputan "list_en" ke db service_lists
        if ($this->list_en != '') {
            ServiceList::create([
                'service_id' => $service->id,
                'list'=> $this->list_en,
                'lang'=> 'en_GB',
            ]);
        }

        // Simpan data dari inputan "description_id" ke db service_details
        if ($this->description_id != '') {
            ServiceDetail::create([
                'service_id' => $service->id,
                'description'=> $this->description_id,
                'lang'=> 'id_ID',
            ]);
        }

        // Simpan data dari inputan "description_en" ke db service_details
        if ($this->description_en != '') {
            ServiceDetail::create([
                'service_id' => $service->id,
                'description'=> $this->description_en,
                'lang'=> 'en_GB',
            ]);
        }

        return redirect()->route('service.input');
    }

    public function render()
    {
        return view('livewire.service-input')
        ->layout('layouts.app');
    }
}

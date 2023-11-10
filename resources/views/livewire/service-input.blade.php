<div>
    <form wire:submit.prevent='store' enctype="multipart/form-data">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-8 col-xl-6">
                <div class="mb-4">
                    <label for="service_image" class="form-label">Photo Ilsutrasi</label>
                    <input type="file" accept=".jpg, .jpeg" class="form-control form-control-file" id="service_image" wire:model='image' autofocus>
                    @error('image')
                        <div class="text-sm text-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>

                {{-- start : nav-tabs --}}
                <ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
                    <li class="nav-item">
                        <button class="nav-link active" id="ind-tab" data-bs-toggle="tab" data-bs-target="#ind-tab-pane"
                            type="button" role="tab" aria-controls="ind-tab-pane" aria-selected="true">Indonesia</button>
                    </li>

                    <li class="nav-item">
                        <button class="nav-link" id="eng-tab" data-bs-toggle="tab" data-bs-target="#eng-tab-pane"
                            type="button" role="tab" aria-controls="eng-tab-pane" aria-selected="false">English</button>
                    </li>
                </ul>
                {{-- end : nav-tabs --}}

                {{-- start : tab-content --}}
                <div class="tab-content" id="myTabContent">
                    {{-- start : tab-pane indonesia --}}
                    <div class="tab-pane fade show active" id="ind-tab-pane" role="tabpanel" aria-labelledby="ind-tab"
                        tabindex="0">
                        <div class="mb-4">
                            <label for="service_name" class="form-label">Nama Layanan (IND)</label>
                            <input type="text" class="form-control" id="service_name" wire:model='name_id'>
                            @error('name_id')
                                <div class="text-sm text-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="service_list" class="form-label">Daftar Layanan (IND)</label>
                            <input type="text" class="form-control" id="service_list" wire:model='list_id'>
                            @error('list_id')
                                <div class="text-sm text-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="service_description" class="form-label">Deskripsi Layanan (IND)</label>
                            <textarea class="form-control" id="service_description" rows="5" wire:model='description_id'></textarea>
                            @error('description_id')
                                <div class="text-sm text-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    {{-- end : tab-pane indonesia --}}

                    {{-- start : tab-pane english --}}
                    <div class="tab-pane fade" id="eng-tab-pane" role="tabpanel" aria-labelledby="eng-tab"
                        tabindex="0">
                        <div class="mb-4">
                            <label for="service_name" class="form-label">Service Name (ENG)</label>
                            <input type="text" class="form-control" id="service_name" wire:model='name_en'>
                            @error('name_en')
                                <div class="text-sm text-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="service_list" class="form-label">Service List (ENG)</label>
                            <input type="text" class="form-control" id="service_list" wire:model='list_en'>
                            @error('list_en')
                                <div class="text-sm text-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="service_description" class="form-label">Service Description (ENG)</label>
                            <textarea class="form-control" id="service_description" rows="5" wire:model='description_en'></textarea>
                            @error('description_en')
                                <div class="text-sm text-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    {{-- end : tab-pane english --}}
                </div>
                {{-- end : tab-content --}}

                <div class="mb-0">
                    <button type="submit" class="btn btn w-100 btn-primary">Simpan Data</button>
                </div>
            </div>
        </div>
    </form>
</div>

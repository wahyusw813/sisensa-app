<x-navbar></x-navbar>
<div class="w-full mx-auto px-4 sm:px-6 lg:px-36 py-10">
    <div class="w-full mx-auto space-y-6">
        <div class="bg-[#122036] rounded-lg p-6 text-white">
            <h2 class="text-xl font-semibold mb-4">Informasi Saldo Cuti</h2>
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <p class="text-gray-300">Saldo Cuti Tahunan</p>
                    <p class="text-3xl font-bold">12 Hari</p>
                </div>
                <div>
                    <p class="text-gray-300">Cuti Terpakai</p>
                    <p class="text-3xl font-bold">3 Hari</p>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-lg border-2 border-custom p-6">
            <h2 class="text-xl font-semibold mb-6 text-[#122036]">Form Pengajuan Cuti</h2>
            <form class="space-y-6">
                <div class="grid grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Tanggal Mulai</label>
                        <input type="date" class="w-full border-gray-300 rounded-md shadow-sm focus:border-custom focus:ring focus:ring-custom focus:ring-opacity-50" />
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Tanggal Selesai</label>
                        <input type="date" class="w-full border-gray-300 rounded-md shadow-sm focus:border-custom focus:ring focus:ring-custom focus:ring-opacity-50" />
                    </div>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Tipe Cuti</label>
                    <div class="space-y-2">
                        <label class="inline-flex items-center">
                            <input type="radio" name="leave_type" value="cuti" class="form-radio text-custom focus:ring-custom" checked="" />
                            <span class="ml-2">Cuti</span>
                        </label>
                        <br />
                        <label class="inline-flex items-center">
                            <input type="radio" name="leave_type" value="sakit" class="form-radio text-custom focus:ring-custom" />
                            <span class="ml-2">Sakit</span>
                        </label>
                    </div>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Keterangan (Opsional)</label>
                    <textarea class="w-full border-gray-300 rounded-md shadow-sm focus:border-custom focus:ring focus:ring-custom focus:ring-opacity-50" rows="3"></textarea>
                </div>

                <div id="fileUpload" class="block">
                    <label class="block text-sm font-medium text-gray-700 mb-2">Unggah Surat Keterangan Sakit</label>
                    <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md hover:border-custom">
                        <div class="space-y-1 text-center">
                            <i class="fas fa-cloud-upload-alt text-gray-400 text-3xl mb-3"></i>
                            <div class="flex text-sm text-gray-600">
                                <label class="relative cursor-pointer bg-white rounded-md font-medium text-custom hover:text-custom-dark focus-within:outline-none">
                                    <span>Unggah file</span>
                                    <input type="file" class="sr-only" />
                                </label>
                                <p class="pl-1">atau drag and drop</p>
                            </div>
                            <p class="text-xs text-gray-500">PDF, JPG, PNG hingga 10MB</p>
                        </div>
                    </div>
                </div>

                <button type="submit" class="hidden">Ajukan Cuti</button><button type="button" class="hidden" onclick="history.back()">Kembali</button>
                <div class="flex justify-between space-x-4" id="button-container"><button type="button" class="!rounded-button w-1/3 bg-gray-200 text-gray-700 px-4 py-2 font-semibold hover:bg-gray-300 transition-all" onclick="history.back()">Kembali</button><button type="submit" class="!rounded-button w-1/3 bg-yellow-400 text-[#122036] px-4 py-2 font-semibold hover:opacity-90 transition-opacity">Ajukan Cuti</button></div>
            </form>
        </div>

        <div class="bg-white rounded-lg border-2 border-custom p-6">
            <h2 class="text-xl font-semibold mb-4 text-[#122036]">Status Pengajuan Terakhir</h2>
            <div class="flex items-center space-x-4">
                <div class="flex-shrink-0">
                    <i class="fas fa-clock text-custom text-xl"></i>
                </div>
                <div>
                    <p class="font-medium text-[#122036]">Menunggu Persetujuan</p>
                    <p class="text-sm text-gray-500">Pengajuan cuti 3 hari (12-14 Maret 2024)</p>
                </div>
            </div>
        </div>
    </div>
</div>
<x-footer></x-footer>
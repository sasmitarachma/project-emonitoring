@extends('welcome')

@section('conten')
<div class="relative shadow-md sm:rounded-lg position:fixed top 0">
    <div class="flex flex-column sm:flex-row flex-wrap space-y-4 sm:space-y-0 items-center justify-between pb-4">
        <!-- Modal toggle -->
        <button data-modal-target="crud-modal" data-modal-toggle="crud-modal" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
        Add
        </button>
        <div class="relative">
            <button id="dropdownRadioButton" class="inline-flex items-center text-gray-500 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium rounded-lg text-sm px-3 py-1.5 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700" type="button">
                <svg class="w-3 h-3 text-gray-500 dark:text-gray-400 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm3.982 13.982a1 1 0 0 1-1.414 0l-3.274-3.274A1.012 1.012 0 0 1 9 10V6a1 1 0 0 1 2 0v3.586l2.982 2.982a1 1 0 0 1 0 1.414Z"/>
                </svg>
                Last 30 days
                <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                </svg>
            </button>
            <!-- Dropdown menu -->
            <div id="dropdownRadio" class="z-10 hidden absolute left-0 mt-1 w-40 bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600">
                <ul class="p-3 space-y-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownRadioButton">
                    <li>
                        <div class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                            <input id="filter-radio-example-1" type="radio" value="last_day" name="filter-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="filter-radio-example-1" class="w-full ms-2 text-sm font-medium text-gray-900 rounded dark:text-gray-300">Last day</label>
                        </div>
                    </li>
                    <li>
                        <div class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                            <input checked id="filter-radio-example-2" type="radio" value="last_7_days" name="filter-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="filter-radio-example-2" class="w-full ms-2 text-sm font-medium text-gray-900 rounded dark:text-gray-300">Last 7 days</label>
                        </div>
                    </li>
                    <li>
                        <div class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                            <input id="filter-radio-example-3" type="radio" value="last_30_days" name="filter-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="filter-radio-example-3" class="w-full ms-2 text-sm font-medium text-gray-900 rounded dark:text-gray-300">Last 30 days</label>
                        </div>
                    </li>
                    <li>
                        <div class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                            <input id="filter-radio-example-4" type="radio" value="last_3_month" name="filter-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="filter-radio-example-4" class="w-full ms-2 text-sm font-medium text-gray-900 rounded dark:text-gray-300">Last 3 month</label>
                        </div>
                    </li>
                    <li>
                        <div class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                            <input id="filter-radio-example-5" type="radio" value="last_year" name="filter-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="filter-radio-example-5" class="w-full ms-2 text-sm font-medium text-gray-900 rounded dark:text-gray-300">Last year</label>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <!--<label for="table-search" class="sr-only">Search</label>-->
        <!-- <div>
            <div class="absolute inset-y-0 left-0 rtl:inset-r-0 rtl:right-0 flex items-center ps-3 pointer-events-none">
                <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
            </div>
            <input type="text" id="table-search" class="block justify-end p-2 ps-12 text-sm text-gray-900 border border-gray-300 rounded-lg w-70 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search for items">
        </div> -->
    </div>

    <!-- Main modal -->
    <div id="crud-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                        Create New Sponsorship
                    </h3>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="crud-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <form action="{{ route('sponsorship.store') }}" method="POST" enctype="multipart/form-data" class="p-4 md:p-5">
                    @csrf
                    <div class="grid gap-4 mb-4 grid-cols-2">
                        <div class="col-span-2">
                            <label for="asal_proposal" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Asal Proposal</label>
                            <input type="text" name="asal_proposal" id="asal_proposal" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Asal proposal" required>
                        </div>
                        <div class="col-span-2">
                            <label for="judul_proposal" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Judul Proposal</label>
                            <input type="text" name="judul_proposal" id="judul_proposal" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Judul proposal" required>
                        </div>
                        <div class="col-span-2 sm:col-span-1">
                            <label for="waktu_masuk" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Waktu Masuk</label>
                            <input type="date" name="waktu_masuk" id="waktu_masuk" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required>
                        </div>
                        <div class="col-span-2 sm:col-span-1">
                            <label for="waktu_diterima" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Waktu Diterima</label>
                            <input type="date" name="waktu_diterima" id="waktu_diterima" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required>
                        </div>
                        <div class="col-span-2">
                            <label for="approved" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Approved</label>
                            <label for="toggle-approval" class="flex items-center cursor-pointer">
                                <!-- toggle -->
                                <div class="relative">
                                    <!-- input -->
                                    <input type="checkbox" id="toggle-approval" class="sr-only" onclick="toggleApproval()">
                                    <!-- line -->
                                    <div class="block bg-gray-600 w-10 h-6 rounded-full"></div>
                                    <!-- dot -->
                                    <div class="dot absolute left-1 top-1 bg-white w-4 h-4 rounded-full transition"></div>
                                </div>
                                <!-- label -->
                                <div class="ml-3 text-gray-700 font-medium dark:text-gray-300">
                                    <span id="toggle-label">Non Approved</span>
                                </div>
                            </label>
                            <input type="hidden" name="approved" id="approved" value="0">
                        </div>
                        <div class="col-span-2">
                            <label for="disposisi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Asal Proposal</label>
                            <input type="text" name="disposisi" id="disposisi" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Disposisi" required>
                        </div>
                        <div class="col-span-2">
                            <label for="nilai_diajukan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nilai Diajukan</label>
                            <input type="text" name="nilai_diajukan" id="nilai_diajukan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Nilai Diajukan" required>
                        </div>
                        <div class="col-span-2">
                            <label for="nilai_diterima" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nilai Diterima</label>
                            <input type="text" name="nilai_diterima" id="nilai_diterima" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Nilai Diterima" required>
                        </div>

                        <div class="col-span-2">
                            <label for="jumlah" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jumlah</label>
                            <input type="text" name="jumlah" id="jumlah" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Jumlah" required>
                        </div>
                        <div class="col-span-2">
                            <label for="evidence_file" class="form-label block text-sm font-medium text-gray-900 dark:text-white">Evidence File</label>
                            <i class="text-gray-500 text-sm mb-2 block">Upload file: pdf, jpeg, jpg, png</i>
                            <div class="flex items-center">
                                <label for="evidence_file" class="flex items-center px-3 py-1 bg-white text-blue-500 rounded-lg border border-blue-500 cursor-pointer hover:bg-blue-500 hover:text-white transition duration-300 ease-in-out">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M7.293 4.293a1 1 0 0 1 1.414 0L10 5.586l1.293-1.293a1 1 0 1 1 1.414 1.414L11.414 7l1.293 1.293a1 1 0 1 1-1.414 1.414L10 8.414 8.707 9.707a1 1 0 1 1-1.414-1.414L8.586 7 7.293 5.707a1 1 0 0 1 0-1.414zM8 10a1 1 0 0 1-2 0V7a1 1 0 0 1 2 0v3z" clip-rule="evenodd" />
                                        <path d="M4 4a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2H8a2 2 0 0 0-2-2zm0 2h8a1 1 0 0 1 1 1v6a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1z" />
                                    </svg>
                                    <span>Upload File</span>
                                </label>
                                <input type="file" class="sr-only" id="evidence_file" name="evidence_file">
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                        Add new sponsorship
                    </button>
                </form>
            </div>
        </div>
    </div>

    <!-- Edit modal -->
    @foreach($sponsorships as $s)
    <div id="editModal{{ $s->id }}" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-md max-h-full">
        <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                        Edit Sponsorship
                    </h3>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="editModal{{ $s->id }}">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <form action="{{ route('sponsorship.update', $s->id) }}" method="POST" enctype="multipart/form-data" class="p-4 md:p-5">
                @csrf
                @method('PUT')
                    <div class="grid gap-4 mb-4 grid-cols-2">
                        <div class="col-span-2">
                            <label for="edit_asal_proposal" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Asal Proposal</label>
                            <input type="text" name="asal_proposal" id="edit_asal_proposal" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" value="{{ $s->asal_proposal }}" required>
                        </div>
                        <div class="col-span-2">
                            <label for="edit_judul_proposal" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Judul Proposal</label>
                            <input type="text" name="judul_proposal" id="edit_judul_proposal" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" value="{{ $s->judul_proposal }}" required>
                        </div>
                        <div  class="col-span-2 sm:col-span-1">
                            <label for="edit_waktu_masuk" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Waktu Masuk</label>
                            <input type="date" name="waktu_masuk" id="edit_waktu_masuk" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" value="{{ \Carbon\Carbon::parse($s->waktu_masuk)->format('Y-m-d') }}" required>
                        </div>
                        <div class="col-span-2 sm:col-span-1">
                            <label for="edit_waktu_diterima" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Waktu Diterima</label>
                            <input type="date" name="waktu_diterima" id="edit_waktu_diterima" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" value="{{ \Carbon\Carbon::parse($s->waktu_diterima)->format('Y-m-d') }}" required>
                        </div>
                        <div class="col-span-2">
                            <label for="edit_approved" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Approved</label>
                                <select id="edit_approved" name="approved" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                                    <option value="1" {{ $s->approved == 1 ? 'selected' : '' }}>Approved</option>
                                    <option value="0" {{ $s->approved == 0 ? 'selected' : '' }}>Not Approved</option>
                                </select>
                        </div>
                        <div class="col-span-2">
                            <label for="edit_disposisi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Disposisi</label>
                            <input type="text" name="disposisi" id="edit_disposisi" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" value="{{ $s->disposisi }}" required>
                        </div>
                        <div class="col-span-2">
                            <label for="edit_nilai_diajukan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nilai Diajukan</label>
                            <input type="text" name="nilai_diajukan" id="edit_nilai_diajukan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" value="{{ $s->nilai_diajukan }}" required>
                        </div>
                        <div class="col-span-2">
                            <label for="edit_nilai_diterima" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nilai Diterima</label>
                            <input type="text" name="nilai_diterima" id="edit_nilai_diterima" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" value="{{ $s->nilai_diterima }}" required>
                        </div>
                        <div class="col-span-2">
                            <label for="edit_jumlah" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jumlah</label>
                            <input type="text" name="jumlah" id="edit_jumlah" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" value="{{ $s->jumlah }}" required>
                        </div>
                        <div class="col-span-2">
                            <label for="edit_evidence_file" class="block text-sm font-medium text-gray-900 dark:text-white">Evidence File</label>
                            <i class="text-gray-500 text-sm mb-2 block">Upload file: pdf, jpeg, jpg, png</i>
                            <input type="file" name="evidence_file" id="edit_evidence_file" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                            @if ($s->evidence_file)
                            <a href="{{ asset('storage/' . $s->evidence_file) }}" target="_blank" class="lock mb-2 text-sm font-medium text-gray-900 dark:text-white">View current file</a>
                            @endif
                        </div>
                    </div>
                    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Save changes</button>
                </form>
            </div>
        </div>
    </div>
    @endforeach

    <!-- Detail modal -->
    @foreach($sponsorships as $s)
    <div id="detailModal{{ $s->id }}" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                       Detail Sponsorship
                    </h3>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="detailModal{{ $s->id }}">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                    <div class="p-6">
                        <div class="mb-2">
                            <dt class="font-semibold">Asal Proposal:</dt>
                            <dd>{{ $s->asal_proposal }}</dd>
                        </div>                       
                        <div class="mb-2">
                            <dt class="font-semibold">Judul Proposal:</dt>
                            <dd>{{ $s->judul_proposal }}</dd>
                        </div>         
                        <div class="mb-2">
                            <dt class="font-semibold">Waktu Masuk:</dt>
                            <dd>{{ \Carbon\Carbon::parse($s->waktu_masuk)->format('d-m-Y')  }}</dd>
                        </div>                         
                        <div class="mb-2">
                            <dt class="font-semibold">Waktu Diterima:</dt>
                            <dd>{{ \Carbon\Carbon::parse($s->waktu_diterima)->format('d-m-Y')  }}</dd>
                        </div> 
                        <div class="mb-2">
                            <dt class="font-semibold">Approved:</dt>
                            <dd>{{ $s->approved ? 'Yes' : 'No'  }}</dd>
                        </div>  
                        <div class="mb-2">
                            <dt class="font-semibold">Disposisi:</dt>
                            <dd>{{ $s->disposisi }}</dd>
                        </div>     
                        <div class="mb-2">
                            <dt class="font-semibold">Nilai Diajukan:</dt>
                            <dd>{{  $s->nilai_diajukan  }}</dd>
                        </div>                            
                        <div class="mb-2">
                            <dt class="font-semibold">Nilai Diterima:</dt>
                            <dd>{{  $s->nilai_diterima  }}</dd>
                        </div>                             
                        <div class="mb-2">
                            <dt class="font-semibold">Jumlah:</dt>
                            <dd>{{  $s->jumlah  }}</dd>
                        </div>   
                        <h3 class="text-lg font-medium text-gray-900 dark:text-white">Evidence File</h3>
                        @if ($s->evidence_file)
                            @php
                                $fileExtension = pathinfo($s->evidence_file, PATHINFO_EXTENSION);
                            @endphp
                            @if (pathinfo($s->evidence_file, PATHINFO_EXTENSION) == 'jpg' || pathinfo($s->evidence_file, PATHINFO_EXTENSION) == 'jpeg' || pathinfo($s->evidence_file, PATHINFO_EXTENSION) == 'png')
                                <img src="{{ asset('storage/' . $s->evidence_file) }}" style="width:4cm; height:5cm;" />
                            @elseif ($fileExtension == 'pdf')
                                <iframe src="{{ asset('storage/' . $s->evidence_file) }}" width="100%" height="500px"></iframe>
                            @elseif (in_array($fileExtension, ['doc', 'docx', 'xls', 'xlsx']))
                                <iframe src="https://view.officeapps.live.com/op/embed.aspx?src={{ urlencode(asset('storage/' . $s->evidence_file)) }}" width="100%" height="500px"></iframe>
                            @else
                                <iframe src="{{ asset('storage/' . $s->evidence_file) }}" width="100%" height="500px"></iframe>
                            @endif
                        @else
                            <p>No file uploaded.</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach

    <div class="overflow-x-auto">
    <table id="dataTable" class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">No</th>
                <th scope="col" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">Asal Proposal</th>
                <th scope="col" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">Judul Proposal</th>
                <th scope="col" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">Waktu Masuk</th>
                <th scope="col" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">Waktu Diterima</th>
                <th scope="col" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Approved
                    <button type="button" class="relative inline-block ml-2 cursor-pointer" id="filter-container">
                        <svg class="w-4 h-4 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24" id="filter-icon">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m8 15 4 4 4-4m0-6-4-4-4 4"/>
                        </svg>
                        <select id="approved-filter" class="absolute left-0 top-full hidden block p-2 ps-12 text-sm text-gray-900 border border-gray-300 rounded-lg w-28 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option value="">All</option>
                            <option value="Approved">Approved</option>
                            <option value="No Approved">Not Approved</option>
                        </select>
                    </button>
                </th>
                <th scope="col" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">Disposisi</th>
                <th scope="col" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">Nilai Diajukan</th>
                <th scope="col" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">Nilai Diterima</th>
                <th scope="col" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">Jumlah</th>
                <th scope="col" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">Evidence</th>
                <th scope="col" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($sponsorships as $s)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td class="px-2 py-4 text-center">{{ $loop->iteration }}</td>
                <td class="px-2 py-4 text-center">{{ $s->asal_proposal }}</td>
                <td class="px-2 py-4 text-center">{{ $s->judul_proposal }}</td>
                <td class="px-2 py-4 text-center">{{ \Carbon\Carbon::parse($s->waktu_masuk)->format('d-m-Y') }}</td>
                <td class="px-2 py-4 text-center">{{ \Carbon\Carbon::parse($s->waktu_diterima)->format('d-m-Y') }}</td>
                <td class="px-2 py-4 text-center">{{ $s->approved ? 'Approved' : 'No Approved' }}</td>
                <td class="px-2 py-4 text-center">{{ $s->disposisi }}</td>
                <td class="px-2 py-4 text-center">{{ $s->nilai_diajukan }}</td>
                <td class="px-2 py-4 text-center">{{ $s->nilai_diterima }}</td>
                <td class="px-2 py-4 text-center">{{ $s->jumlah }}</td>
                <td class="px-2 py-4 text-center">
                    @if ($s->evidence_file)
                    <a href="{{ asset(Storage::url($s->evidence_file)) }}" target="_blank">View File</a>
                    @else
                    No file uploaded
                    @endif
                </td>
                <td class="px-6 py-4 flex">
                    <button data-modal-target="detailModal{{ $s->id }}" data-modal-toggle="detailModal{{ $s->id }}" onclick="toggleModal('detailModal{{ $s->id }}')" class="btn btn-primary" type="button">                        
                        <svg class="w-6 h-6 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-width="2" d="M21 12c0 1.2-4.03 6-9 6s-9-4.8-9-6c0-1.2 4.03-6 9-6s9 4.8 9 6Z"/>
                            <path stroke="currentColor" stroke-width="2" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
                        </svg>
                    </button>
                    |
                    <button type="button" data-modal-target="editModal{{ $s->id }}" data-modal-toggle="editModal{{ $s->id }}" class="btn btn-primary">
                        <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m14.304 4.844 2.852 2.852M7 7H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-4.5m2.409-9.91a2.017 2.017 0 0 1 0 2.853l-6.844 6.844L8 14l.713-3.565 6.844-6.844a2.015 2.015 0 0 1 2.852 0Z"/>
                        </svg>
                    </button>
                    |
                    <form action="{{ route('sponsorship.destroy', $s->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this sponsorship?')">
                        @method('DELETE')
                        @csrf
                        <button type="submit">
                            <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 7h14m-9 3v8m4-8v8M10 3h4a1 1 0 0 1 1 1v3H9V4a1 1 0 0 1 1-1ZM6 7h12v13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7Z"/>
                            </svg>
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>

    <!-- <div class="flex justify-end py-32">
        <button id="printButton" type="button" class="text-white bg-red-700 hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-red-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">
          Print Report
        </button>
    </div> -->
    <div class="flex justify-end py-32">
        <button id="printByDaysButton" type="button" class="text-white bg-red-700 hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-red-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">
            Print Report by Days
        </button>
        <button id="printByApprovedStatusButton" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mb-2 ml-4 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-900">
            Print Report by Approved Status
        </button>
    </div>

    <script>
        function toggleApproval() {
            var checkbox = document.getElementById("toggle-approval");
            var toggleLabel = document.getElementById("toggle-label");
            var approved = document.getElementById('approved'); // Ensure approved is correctly referenced
            var dot = checkbox.nextElementSibling.nextElementSibling; // Correct dot element reference

            if (checkbox.checked) {
                approved.value = 1;
                toggleLabel.innerText = 'Approved';
                dot.classList.add('translate-x-full', 'bg-blue-600');
                dot.classList.remove('bg-gray-300');
            } else {
                approved.value = 0;
                toggleLabel.innerText = 'Non Approved';
                dot.classList.remove('translate-x-full', 'bg-blue-600');
                dot.classList.add('bg-gray-300');
            }
        }

        document.addEventListener('DOMContentLoaded', function () {
        // Ensure these IDs match your HTML structure
            const toggle = document.getElementById('toggle-approval');
            const dot = toggle.nextElementSibling.nextElementSibling;
            const label = document.getElementById('toggle-label');

            const updateToggleUI = () => {
                if (toggle.checked) {
                    dot.classList.add('translate-x-full', 'bg-blue-600');
                    dot.classList.remove('bg-gray-300');
                    label.textContent = 'Approved';
                } else {
                    dot.classList.remove('translate-x-full', 'bg-blue-600');
                    dot.classList.add('bg-gray-300');
                    label.textContent = 'Non Approved';
                }
            };

            toggle.addEventListener('change', updateToggleUI);
                updateToggleUI();  // Initialize the UI based on the initial checkbox state
            });

        function formatNumberWithCommas(number) {
            return number.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        }

        function formatInputValue(event) {
            let input = event.target;
            let value = input.value;

            value = value.replace(/[^0-9.]/g, "");

            if (value) {
                value = parseInt(value).toLocaleString('en-US', { maximumFractionDigits: 0 });
                value = 'Rp ' + value;
            }

                input.value = value;
        }

        function closeModal(modalId) {
            document.getElementById(modalId).classList.add('hidden');
        }

        // // Attach formatInputValue to relevant input fields
        // document.getElementById('nilai_diajukan').addEventListener('input', formatInputValue);
        // document.getElementById('nilai_diterima').addEventListener('input', formatInputValue);
        // document.getElementById('jumlah').addEventListener('input', formatInputValue);

        // Function to handle modal toggling
        function toggleModal(modalId) {
            const modal = document.getElementById(modalId);
            modal.classList.toggle('hidden');
        }

        // Event listeners for modal toggle buttons
        document.addEventListener('DOMContentLoaded', function() {
            const modalToggleButtons = document.querySelectorAll('[data-modal-toggle]');
            modalToggleButtons.forEach(button => {
                button.addEventListener('click', () => {
                    const modalId = button.getAttribute('data-modal-toggle').substring(1); // Remove the '#' from the ID
                    toggleModal(modalId);
                });
            });

            // Event listeners for modal close buttons
            const modalCloseButtons = document.querySelectorAll('[data-modal-close]');
            modalCloseButtons.forEach(button => {
                button.addEventListener('click', () => {
                    const modalId = button.getAttribute('data-modal-close').substring(1); // Remove the '#' from the ID
                    toggleModal(modalId);
                });
            });
        });

        document.addEventListener('DOMContentLoaded', function() {
            const dropdownRadioButton = document.getElementById('dropdownRadioButton');
            const dropdownRadio = document.getElementById('dropdownRadio');
            const radioInputs = dropdownRadio.querySelectorAll('input[type="radio"]');
            const table = document.getElementById('dataTable');
            const rows = table.getElementsByTagName('tbody')[0].getElementsByTagName('tr');

            dropdownRadioButton.addEventListener('click', function(event) {
                event.stopPropagation();
                dropdownRadio.classList.toggle('hidden');
            });

            document.addEventListener('click', function() {
                dropdownRadio.classList.add('hidden');
            });

            dropdownRadio.addEventListener('click', function(event) {
                event.stopPropagation();
            });

            radioInputs.forEach(function(input) {
                input.addEventListener('change', function() {
                    updateButtonText(input);
                    filterRowsByDate(input.value);
                    dropdownRadio.classList.add('hidden');
                });
            });

            function updateButtonText(selectedInput) {
                const selectedLabel = selectedInput.nextElementSibling.textContent.trim();
                dropdownRadioButton.innerHTML = `
                    <svg class="w-3 h-3 text-gray-500 dark:text-gray-400 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm3.982 13.982a1 1 0 0 1-1.414 0l-3.274-3.274A1.012 1.012 0 0 1 9 10V6a1 1 0 0 1 2 0v3.586l2.982 2.982a1 1 0 0 1 0 1.414Z"/>
                    </svg>
                    ${selectedLabel}
                    <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                    </svg>
                `;
            }

            function filterRowsByDate(filterValue) {
                const today = new Date();
                let startDate, endDate;

                switch (filterValue) {
                    case 'last_day':
                        startDate = new Date(today);
                        startDate.setDate(today.getDate() - 2);
                        endDate = new Date(today);
                        break;
                    case 'last_7_days':
                        startDate = new Date(today);
                        startDate.setDate(today.getDate() - 8);
                        endDate = new Date(today);
                        break;
                    case 'last_30_days':
                        startDate = new Date(today);
                        startDate.setDate(today.getDate() - 31);
                        endDate = new Date(today);
                        break;
                    case 'last_3_month':
                        startDate = new Date(today.getFullYear(), today.getMonth() - 2, 1); // Start of the month 3 months ago
                        // Calculate end date as the last day of the previous month
                        endDate = new Date(today.getFullYear(), today.getMonth() + 1, 0); // End of the previous month
                        break;
                    case 'last_year':
                        startDate = new Date(today.getFullYear() - 1, 0, 1); // January 1st of last year
                        endDate = new Date(today.getFullYear() - 1, 11, 31); // December 31st of last year
                        break;
                    default:
                        startDate = new Date(0); // A very old date to effectively match all
                        endDate = today;
                        break;
                }

                for (let i = 0; i < rows.length; i++) {
                    let row = rows[i];
                    let waktuDiterimaCell = row.getElementsByTagName('td')[4]; // Assuming waktu_diterima is the 5th column

                    // Ensure waktuDiterimaCell contains a valid date string
                    let waktu_masuk = parseDateFromString(waktuDiterimaCell.textContent.trim());

                    if (!waktu_masuk) {
                        row.style.display = 'none'; // Hide row if date parsing fails
                        continue;
                    }

                    if (waktu_masuk >= startDate && waktu_masuk <= endDate) {
                        row.style.display = '';
                    } else {
                        row.style.display = 'none';
                    }
                }
            }

            function parseDateFromString(dateString) {
                // Example: Assume dateString format is 'dd-mm-yyyy'
                const parts = dateString.split('-');
                if (parts.length !== 3) return null;
                const day = parseInt(parts[0], 10);
                const month = parseInt(parts[1], 10) - 1; // Month is zero-indexed
                const year = parseInt(parts[2], 10);
                return new Date(year, month, day);
            }
        });


        document.addEventListener('DOMContentLoaded', function() {
            const filterContainer = document.getElementById('filter-container');
            const approvedFilter = document.getElementById('approved-filter');
            const table = document.getElementById('dataTable');
            const rows = table.getElementsByTagName('tbody')[0].getElementsByTagName('tr');

            // Toggle dropdown visibility on click
            filterContainer.addEventListener('click', function(event) {
                event.stopPropagation(); // Prevent event from propagating to document
                approvedFilter.classList.toggle('hidden');
            });

            // Hide dropdown when clicking outside
            document.addEventListener('click', function() {
                approvedFilter.classList.add('hidden');
            });

            // Prevent dropdown from closing when clicking inside
            approvedFilter.addEventListener('click', function(event) {
                event.stopPropagation(); // Prevent event from propagating to document
            });

            // Filter rows based on approved filter selection
            approvedFilter.addEventListener('change', function() {
                const approvedFilterValue = approvedFilter.value;

                for (let i = 0; i < rows.length; i++) {
                    let row = rows[i];
                    let approvedCell = row.getElementsByTagName('td')[5]; // Adjust the index if the approved column is not the 6th column

                    if (approvedFilterValue === "") {
                        row.style.display = ''; // Show all rows when filter is set to "All"
                    } else {
                        // Trim whitespace and lowercase the text content for comparison
                        let cellText = approvedCell.textContent.trim().toLowerCase();
                        let filterText = approvedFilterValue.toLowerCase();

                        if (cellText === filterText) {
                            row.style.display = ''; // Show rows that match the filter
                        } else {
                            row.style.display = 'none'; // Hide rows that do not match the filter
                        }
                    }
                }
            });
        });

        // Event listeners for the print buttons
        document.getElementById('printByDaysButton').addEventListener('click', function() {
            printReport('days');
        });
        document.getElementById('printByApprovedStatusButton').addEventListener('click', function() {
            printReport('approved');
        });

        function printReport(filterType) {
            // Select the table element
            const table = document.getElementById('dataTable');

            // Create a new window for printing
            const newWindow = window.open('', '_blank');

            // Construct the HTML content to print
            let html = '<html><head><title>Print Report</title>';
            html += '<style>table { width: 100%; border-collapse: collapse; margin:auto; }'; 
            html += 'th, td { border: 1px solid #ddd; padding: 8px; text-align: center; }</style>';
            html += '</head><body>';
            html += '<h2 style="text-align: center;">Sponsorship Report</h2>';
            html += '<table><thead>';
            html += '<tr>';
            html += '<th>Asal Proposal</th>';
            html += '<th>Judul Proposal</th>';
            html += '<th>Waktu Masuk</th>';
            html += '<th>Waktu Diterima</th>';
            html += '<th>Approved</th>';
            html += '<th>Disposisi</th>';
            html += '<th>Nilai Diajukan</th>';
            html += '<th>Nilai Diterima</th>';
            html += '<th>Jumlah</th>';
            html += '</tr>';
            html += '</thead><tbody>';

            // Iterate through each row of the original table and copy desired columns
            const rows = table.querySelectorAll('tbody tr');
            rows.forEach(row => {
                if (row.style.display !== 'none') {
                    html += '<tr>';
                    const cells = row.querySelectorAll('td');
                    for (let i = 1; i <= 9; i++) { // Adjust the loop count based on columns needed
                        html += `<td>${cells[i].innerHTML}</td>`;
                    }
                    html += '</tr>';
                }
            });

            html += '</tbody></table>';
            html += '</body></html>';

            // Write the HTML content to the new window
            newWindow.document.open();
            newWindow.document.write(html);
            newWindow.document.close();

            // Print the window
            newWindow.print();
        }


        // document.addEventListener('DOMContentLoaded', function() {
        //     const dropdownToggleButtons = document.querySelectorAll('[data-dropdown-toggle]');
            
        //     dropdownToggleButtons.forEach(button => {
        //         button.addEventListener('click', () => {
        //             const dropdownId = button.getAttribute('data-dropdown-toggle');
        //             const dropdown = document.getElementById(dropdownId.substring(1)); // Remove the '#' from the ID

        //             if (dropdown) {
        //                 dropdown.classList.toggle('hidden');
        //             }
        //         });
        //     });
        // });
        </script>

        <style>
            /* Add the necessary CSS for the toggle */
            .translate-x-full {
                transform: translateX(100%);
            }
        </style>
</div>
@endsection


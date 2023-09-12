<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __("Contacts Form") }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg"> 
                <div class="p-6 text-gray-900">
                    <h1>Contact Information</h1>
                    <div class="center-container" style="display: flex; justify-content: center; align-items: center;">
                        <table style="border-collapse: collapse;justify-content: center; align-items:center">
                            <form action="{{route('add_contacts')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <tbody>
                                    <tr>
                                        <td style="padding: 8px;"><label for="contact_name">Contact Name:</label></td>
                                        <td style="padding: 8px;"><input type="text" id="contact_name" name="contact_name" required><br><br></td>
                                    </tr>

                                    <tr>
                                        <td style="padding: 8px;"><label for="contact_number">Contact Number:</label></td>
                                        <td style="padding: 8px;"><input type="number" id="contact_number" name="contact_number" required><br><br></td>
                                    </tr>

                                    <tr>
                                        <td style="padding: 8px;">
                                            <div class="container flex flex-col justify-center items-center p-3 mx-auto sm:py-12 lg:py-24 lg:flex-row lg:justify-between">
                                            <button type="submit" style="color: white; border: 3px solid rgb(94, 176, 238); background-color: #ffffff; color: rgb(94, 176, 238); padding: 8px 16px; border-radius: 4px; cursor: pointer;">
                                                <strong>Submit</strong>
                                            </button>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </form>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>



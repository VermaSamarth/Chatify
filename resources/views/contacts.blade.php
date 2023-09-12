<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __("Contacts") }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg"> 
                <div class="p-6 text-gray-900">
                    {{-- <img src="{{asset('appdata/your_contacts.gif')}}" width="200px" srcset="" style="align-items: center"> --}}
                    <table style="border-collapse: collapse; width: 100%; background-color: #f2f2f2;">
                        <thead style="border: 3px solid #ddd; text-align: center; padding: 8px;">
                            <tr>
                                <th>Serial No</th>
                                <th>Profile Picture</th>
                                <th>Contact Name</th>
                                <th>Contact Number</th>
                                <th>Email</th>
                                <th>Message</th>
                            </tr>
                        </thead>
                        <tbody style="border: 3px solid #ddd; text-align: center; padding: 8px;">
                            <tr style="background-color: #f2f2f2; border: 2px solid #ddd;">
                                <td>1</td>
                                <td><img src="profile1.jpg" alt="Profile Photo 1"></td>
                                <td>John Doe</td>
                                <td>123-456-7890</td>
                                <td>john@example.com</td>
                                <td>Hi there!</td>
                            </tr>
                            <tr style="background-color: #f2f2f2; border: 2px solid #ddd;">
                                <td>2</td>
                                <td><img src="profile2.jpg" alt="Profile Photo 2"></td>
                                <td>Jane Smith</td>
                                <td>987-654-3210</td>
                                <td>jane@example.com</td>
                                <td>Hello!</td>
                            </tr>
                            <!-- Add more rows as needed -->
                        </tbody>
                    </table>
                    
                </div>
                
            </div>
        </div>
    </div>
</x-app-layout>



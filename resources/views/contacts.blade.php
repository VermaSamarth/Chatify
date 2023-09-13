

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight" style="color: #fff; font-size: 1.75rem;">
            {{ __("Buddies") }}
        </h2>
    </x-slot>

    <div class="py-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-6" >
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg"> 
                <div class="p-6 text-gray-900">
                    <div class="add-buddy" style="text-align: center; font-size: 30px; color: #000;float:inline-start; padding: 10px; float:left; display: flex;  align-items: center; justify-content: center;  height: auto; width:50%;">
                        <p style="text-align: center; padding: 8px; font-size:1.5 rem; color:black"><strong>Your Buddies</strong></p>
                    </div>
                    <div class="your-buddies" style="text-align: center; font-size: 30px; color: #000;  padding: 10px;  display: flex; float:left; align-items: center; justify-content: center;  height: auto; width:50%;">
                        <p style="text-align: center; padding: 8px; font-size:1.5 rem; color:black"><strong>Find a buddy</strong></p>
                    </div>
                <div class="add-buddy" style="text-align: center; font-size: 30px; background-image: linear-gradient(to right, #edf649, #35ca74, #008f90, #005178, #051937); float:left; color: white;  padding: 10px;  display: flex;  align-items: center; justify-content: center;  height: auto; width:50%;">  
                    <table style="border-collapse: collapse; width: 100%; background-color: #f2f2f2;">
                            <thead style="border: 3px solid #252121; text-align: center; padding: 8px; font-size:1rem; color:black">
                                <tr>
                                    <th style="width: 50px"></th>
                                    <th style="width: 50px">DP</th>
                                    <th>Name</th>
                                    <th>Message</th>
                                </tr>
                            </thead>
                            <tbody style="border: 3px solid #000; text-align: center; padding: 8px; font-size:1rem; color:black">
                                <tr style="background-color: #f2f2f2; border: 2px solid #ddd;">
                                    <td>1</td>
                                    <td><img src="{{asset('appdata/chatify.png')}}" width="50px"></td>
                                    <td>John Doe</td>
                                    <td>Hi there!</td>
                                </tr>
                                <tr style="background-color: #f2f2f2; border: 2px solid #ddd;">
                                    <td>2</td>
                                    <td><img src="{{asset('appdata/chatify.png')}}" width="50px"></td>
                                    <td>Jane Smith</td>
                                    <td>Hello!</td>
                                </tr>
                                <tr style="background-color: #f2f2f2; border: 2px solid #ddd;">
                                    <td>3</td>
                                    <td><img src="{{asset('appdata/chatify.png')}}" width="50px"></td>
                                    <td>John Doe</td>
                                    <td>Hi there!</td>
                                </tr>
                                <tr style="background-color: #f2f2f2; border: 2px solid #ddd;">
                                    <td>4</td>
                                    <td><img src="{{asset('appdata/chatify.png')}}" width="50px"></td>
                                    <td>Jane Smith</td>
                                    <td>Hello!</td>
                                </tr>
                                <tr style="background-color: #f2f2f2; border: 2px solid #ddd;">
                                    <td>5</td>
                                    <td><img src="{{asset('appdata/chatify.png')}}" width="50px"></td>
                                    <td>John Doe</td>
                                    <td>Hi there!</td>
                                </tr>
                                
                                <!-- Add more rows as needed -->
                            </tbody>
                        </table>
                    </div>
                    
                    <div class="your-buddies" style="text-align: center; font-size: 30px; float:left; color: white; padding: 10px; display: flex;  align-items: center; justify-content: center;  height: auto; width:50%;">
                        <div class="container mt-5">
                            <div classs="form-group">
                                <form action="" method="post">
                                    <label for="search" style="color: #000; font-size: 1rem;"><strong>Enter the username: </strong></label>
                                    <input type="text" id="search" name="search" placeholder="Search Your buddy" class="form-control" style="border-radius: 2px; border-width: 2px; border-color: #000"/>
                                    <button type="submit" style="color: white; border: 2px solid #e13636; background-color: #ffffff; font-size:1rem; color: rgb(213, 59, 59); padding: 8px 16px; border-radius: 4px; cursor: pointer;">
                                        <strong>Add</strong>
                                    </button>
                                </form>
                            </div>
                        </div>
                        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
                        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js">
                        </script>
                        <script type="text/javascript">
                            var route = "{{ url('contacts/autosearch') }}";
                            $('#search').typeahead({
                                source: function (query, process) {
                                    return $.get(route, {
                                        query: query
                                    }, function (data) {
                                        return process(data);
                                    });
                                }
                            });
                        </script>
                    </div>
                </div> 
            </div>
        </div>
    </div>
</x-app-layout>



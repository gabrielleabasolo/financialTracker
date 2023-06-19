<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/table.js"></script>
    <title>Document</title>
</head>
<body class="bg-white">
    <div class="container mx-auto">
            
        <div class="my-5 w-1/4 shadow-md shadow-black rounded-md">
            <form class="p-5">
                <label for="Add Transaction" class="text-center font-bold text-lg px-24">Add Transaction</label>
                @csrf
                <div class="mb-5 mr-10 flex flex-col w-full">
                    <label for="Bank" class="text-lg">Date:</label>
                    <input type="date" name="transactionDate" id="transactionDate">
                </div>
                <div class="mb-5 mr-10 flex flex-col w-full">
                    <label for="Bank" class="text-lg">Transaction:</label>
                    <select name="Bank" id="bank" class="h-10">
                        <option value="#"></option>
                        @foreach ( $transactionData as $transaction)
                        <option value="{{$transaction->id}}">{{$transaction->transaction_type}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-5 mr-10 flex flex-col w-full">
                    <label for="Bank" class="text-lg">Bank:</label>
                    <select name="Bank" id="bank" class="h-10">
                        <option value="#"></option>
                        <option value="1">bpi</option>
                        <option value="2">EastWest</option>
                        <option value="3">Union Bank</option>
                        <option value="4">Metro Bank</option>
                    </select>
                </div>

                <div class="mb-5 mr-10 flex flex-col w-full">
                    <label for="Bank" class="text-lg">Amount:</label>
                    <input type="text" class="text-base p-1">
                </div>

                <div class="mb-5 mr-10 flex flex-col w-full">
                    <label for="Bank" class="text-lg">Description:</label>
                    <textarea name="Description" id="description" cols="3" rows="3" class="resize-none"></textarea>
                </div>


                <div class="flex flex-row-reverse">
                    <p class="bg-red-500 py-1 px-2 w-20 ml-2 text-center rounded cursor-pointer">Cancel</p>
                    <p class="bg-green-300 py-1 px-2  w-20 text-center rounded  cursor-pointer" id="add">Add</p>
                </div>

            </form>
            </div>
            <div class="flex flex-row mx-auto w-full ">
                <table class="w-full mx-auto rounded-t-lg">
                    <thead class="">
                        <tr class="bg-slate-400">
                            <th class="border border-white  px-24 rounded-tl-lg">Date</th>
                            <th class="border px-24">Transaction</th>
                            <th class="border px-24">Bank</th>
                            <th class="border px-24">Amount</th>
                            <th class="border px-24">Details</th>
                            <th class="border border-white px-24 rounded-tr-lg">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>2</td>
                            <td>3</td>
                            <td>4</td>
                            <td>5</td>
                            <td class="flex flex-row">
                                <p class="bg-green-300 rounded-lg text-center w-20 py-2 ml-10 mr-1">Edit</p>
                                <p class="bg-red-500 rounded-lg text-center py-2 w-20">Delete</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
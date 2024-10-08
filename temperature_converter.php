<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperature Converter</title>
    <script src="https://cdn.tailwindcss.com"></script>
    
</head>
<body class=" min-h-screen flex items-center">
    <div class="relative bg-cyan-400  max-w-md w-full m-auto text-center p-20 rounded-full shadow-lg">
        <form action="" class="space-y-4">
        <h1 class="text-2xl font-bold">Temperature Converter</h1>
            <div class="relative">
                <input type="number" name="temperature" id="temperature"
                class="w-full px-4 py-2 border border-gray-300
                focus:outline-none focus:border-cyan-600 rounded-lg shadow-md
                transition-transform" placeholder="Enter temperature" required >
            </div>

            <div class="relative">
                <select name="convert_to" id="convert_to" class="w-full px-4 py-2 border border-gray-300
                focus:outline-none focus:border-cyan-600 rounded-lg shadow-md
                ">
                    <option value="to_fahrenheit">Celsius to Fahrenheit</option>
                    <option value="to_cilsius">Fahrenheit to Celsius</option>
                </select>
            </div>
            <button class="focus:outline-none focus:border-cyan-600 rounded-lg bg-gradient-to-r from-sky-400 to-purple-600 px-4 py-2 border">Convert</button>
        </form>
   
    </div>
    
</body>
</html>
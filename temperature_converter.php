

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

        <form action="" method="post" class="space-y-4">
             <h1 class="text-3xl font-bold">Temperature Converter</h1>
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
                    <option value="to_fahrenheit" class="">Celsius to Fahrenheit</option>
                    <option value="to_cilsius" class="">Fahrenheit to Celsius</option>
                </select>
            </div>
            <button type="submit" name="" class="text-white bg-gradient-to-r from-blue-600 to-purple-900 hover:bg-indigo-500-translate-y-1 hover:scale-110  duration-400 focus:ring-4 focus:outline-none focus:ring-purple-300 dark:focus:ring-purple-800 shadow-lg shadow-purple-500/50 dark:shadow-lg dark:shadow-purple-800/80 font-medium rounded-lg text-sm px-4 py-2 transition ease-in-out delay-150 ">Convert</button>
        </form>
   
        <div class="dark:shadow-lg dark:shadow-purple-800/80 mt-4 relative text-2xl font-bold text-white">
                  
            <?php
                if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['temperature']) && isset($_POST['convert_to']) ) {
                    if (!empty($_POST['temperature']) && is_numeric($_POST['temperature']) ) {

                        $temperature = $_POST['temperature'];
                        $convert_to = $_POST['convert_to'];

                        if ($convert_to == 'to_fahrenheit') {
                            $convert_tempereture = ($temperature * 9/5) + 32  ; //°C
                            echo number_format($convert_tempereture, 2)."<span> °F</span>";
                        }elseif ($convert_to == 'to_cilsius') {
                            $convert_tempereture = ($temperature - 32) * 5/9  ; //°C
                            echo number_format($convert_tempereture, 2)."<span> °C </span>";
                            
                        }else{
                            echo "<p> Please enter a valid tempareture. </p>";
                        }
                    }
                }

            ?>
        </div>
  
    </div>
    
</body>
</html>
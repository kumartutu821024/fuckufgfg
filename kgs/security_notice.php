<?php
// security_notice.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Security Warning - Khan Global Studies</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Outfit:wght@400;700&display=swap');
        body { font-family: 'Outfit', sans-serif; }
    </style>
</head>
<body class="bg-gray-50 flex items-center justify-center min-h-screen p-6">
    <div class="max-w-md w-full bg-white rounded-[2.5rem] shadow-2xl p-10 text-center border border-red-100">
        <div class="w-24 h-24 bg-red-50 text-red-500 rounded-full flex items-center justify-center text-5xl mx-auto mb-8 animate-pulse">
            ⚠️
        </div>
        <h1 class="text-3xl font-black text-gray-900 mb-4">Access Restricted</h1>
        <p class="text-gray-500 font-medium mb-8 leading-relaxed">
            Developer tools are disabled on this platform for security reasons. Continued attempts to inspect the source code may result in a temporary ban.
        </p>
        <a href="https://google.com" class="inline-block w-full py-4 bg-black text-white font-bold rounded-2xl hover:bg-gray-800 transition-all shadow-xl shadow-gray-200">
            Back to Home
        </a>
        <p class="mt-8 text-[10px] text-gray-400 font-bold uppercase tracking-widest">
            Security Protected by ScholarVerse
        </p>
    </div>
</body>
</html>
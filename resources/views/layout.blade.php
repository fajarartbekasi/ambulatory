<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta Information -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reliqui ambulatory</title>

    <!-- Style sheets-->
    <link href='{{ mix('app.css', 'vendor/ambulatory') }}' rel='stylesheet' type='text/css'>
</head>
<body class="bg-gray-200">
<div id="ambulatory" v-cloak>
    <alert
        :message="alert.message"
        :mode="alert.mode"
        :type="alert.type"
        :auto-close="alert.autoClose"
        :confirmation-proceed="alert.confirmationProceed"
        :confirmation-cancel="alert.confirmationCancel"
        v-if="alert.type">
    </alert>
    <div class="flex mb-4">
        <div class="w-1/3 max-h-full">
            <div class="flex justify-center">
                <sidebar-menu></sidebar-menu>
            </div>
        </div>
        <router-view></router-view>

    </div>
</div>

<!-- Global Ambulatory Object -->
<script>
    window.Ambulatory = @json($ambulatoryScriptVariables);
</script>

<script src="{{ mix('app.js', 'vendor/ambulatory') }}"></script>
</body>
</html>
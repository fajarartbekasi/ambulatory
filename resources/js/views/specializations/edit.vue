<script type="text/ecmascript-6">
    export default {}
</script>

<template>
    <form-entry title="Specialization" resource="specializations" okToSave okToDelete>
        <template slot="entry-data" slot-scope="slotProps">
            <div class="md:flex md:items-center mb-6">
                <div class="md:w-1/3">
                    <label class="block text-gray-900 font-bold md:text-right mb-1 md:mb-0 pr-4"
                        for="name">
                        Name
                    </label>
                </div>

                <div class="md:w-2/3">
                    <input id="name"
                        type="text"
                        class="appearance-none block w-64 bg-gray-200 text-gray-900 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-purple-500"
                        v-model="slotProps.formData.name"
                        autofocus>
                    <form-errors :errors="slotProps.formErrors.name"></form-errors>
                </div>
            </div>

            <div class="md:flex md:items-center mb-6">
                <div class="md:w-1/3">
                    <label class="block text-grey-darker font-bold md:text-right mb-1 md:mb-0 pr-4"
                            for="inline-username">
                        Description
                    </label>
                </div>
                <div class="md:w-2/3">
                    <input id="description"
                        type="text"
                        class="appearance-none block w-64 bg-gray-200 text-gray-900 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-purple-500"
                        v-model="slotProps.formData.description">

                    <form-errors :errors="slotProps.formErrors.description"></form-errors>
                </div>
            </div>
        </template>
    </form-entry>
</template>
<script type="text/ecmascript-6">
    export default {}
</script>

<template>
    <form-entry title="Invitation" resource="invitations" okToSave okToDelete>
        <template slot="entry-data" slot-scope="slotProps">
            <div class="md:flex md:items-center mb-6">
                <div class="md:w-1/3">
                    <label class="block text-gray-900 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
                        Role
                    </label>
                </div>
                <div class="md:w-2/3">
                    <div class="inline-block relative w-64">
                        <select id="role"
                                v-model="slotProps.formData.role"
                                class="block appearance-none w-full text-gray-900 bg-gray-200 border border-gray-200 hover:border-gray-200 focus:border-purple-500 px-4 py-2 pr-8 rounded leading-tight focus:outline-none">
                            <option disabled value="">Please select one role</option>
                            <option>Doctor</option>
                            <option>Admin</option>
                        </select>
                        <form-errors :errors="slotProps.formErrors.role"></form-errors>
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                        </div>
                    </div>
                </div>
            </div>
            <div class="md:flex md:items-center mb-6">
                <div class="md:w-1/3">
                    <label class="block text-gray-900 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-username">
                        Email address
                    </label>
                </div>
                <div class="md:w-2/3">
                    <input
                            class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-64 py-2 px-4 text-gray-900 leading-tight focus:outline-none focus:bg-white focus:border-purple-500"
                            id="email"
                            type="email"
                            v-model="slotProps.formData.email">
                    <form-errors :errors="slotProps.formErrors.email"></form-errors>
                </div>
            </div>
        </template>
    </form-entry>
</template>
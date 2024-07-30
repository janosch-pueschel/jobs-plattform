<x-layout>
    <x-page-heading>Create New Job</x-page-heading>

    <x-forms.form method="POST" action="/jobs">
        <x-forms.input name="title" label="Title" />
        <x-forms.input name="salary" label="Salary" />
        <x-forms.input name="location" label="Location" />

        <x-forms.select name="schedule" label="Schedule">
            <option value="Part Time">Part Time</option>
            <option value="Full Time">Full Time</option>
        </x-forms.select>

        <x-forms.input name="url" label="URL" placeholder="https://acme.com/jobs/ceo-wanted" />
        <x-forms.checkbox name="featured" label="Feature (Costs Extra)" />

        <x-forms.divider />

        <x-forms.input name="tags" label="Tags (comma separated)" placeholder="programming, education, hotel" />

        <x-forms.button>Post Job</x-forms.button>
    </x-forms.form>
</x-layout>

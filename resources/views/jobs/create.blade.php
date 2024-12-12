<x-layout>
    <x-page-heading>New Job</x-page-heading>

    <x-forms.form method="POST" action="/jobs">
        <x-forms.input label="Title" name="title" placeholder="CEO" />
        <x-forms.input label="Salary" name="salary" placeholder="90,000 LKR" />
        <x-forms.input label="Location" name="location" placeholder="Colombo" />

        <x-forms.select label="Schedule" name="schedule">
            <option value="part-time">Part Time</option>
            <option value="full-time">Full Time</option>
        </x-forms.select>

        <x-forms.input label="URL" name="url" placeholder="https://jobs.lk/jobs/test" />

        <x-forms.checkbox label="Feature (Costs Extra)" name="featured" />

        <x-forms.divider />

        <x-forms.input label="Tags (comma separated)" name="tags" placeholder="simplejob,education,video" />

        <x-forms.button>Publish</x-forms.button>
    </x-forms.form>
</x-layout>

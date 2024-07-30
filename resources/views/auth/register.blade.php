<x-layout>
    <x-page-heading>Register</x-page-heading>

    <x-forms.form method="POST" action="/register" enctype="multipart/form-data">
        <x-forms.input name="name" label="Name" />
        <x-forms.input name="email" type="email" label="Email" />
        <x-forms.input name="password" type="password" label="Password" />
        <x-forms.input name="password_confirmation" type="password" label="Password Confirmation" />

        <x-forms.divider />
        <x-forms.input name="employer" label="Employer Name" />
        <x-forms.input name="logo" type="file" label="Employer Logo" />
        <x-forms.button>Create Account</x-forms.button>
    </x-forms.form>
</x-layout>

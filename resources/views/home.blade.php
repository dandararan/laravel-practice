@extends('layouts.default')


@section('header')
    <h2>This is the header</h2>
@endsection

@section('maincontent')
    <div class="max-w-md w-full bg-white p-8 rounded-2xl shadow-xl">
        <h1 class="text-3xl font-semibold text-slate-900 mb-8 text-center tracking-tight">Welcome Back</h1>

        <form action="{{ route('formsubmitted') }}" method="post" class="space-y-6">
            @csrf
            <div class="space-y-2">
                <label for="fullname" class="block text-sm font-semibold text-slate-700 px-1">Full Name</label>
                <input type="text" id="fullname" name="fullname" placeholder="John Doe"
                    class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none transition-all duration-200 placeholder:text-slate-400 text-slate-900"
                    required>
            </div>

            <div class="space-y-2">
                <label for="email" class="block text-sm font-semibold text-slate-700 px-1">Email Address</label>
                <input type="email" id="email" name="email" placeholder="john@example.com"
                    class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none transition-all duration-200 placeholder:text-slate-400 text-slate-900"
                    required>
            </div>

            <button type="submit"
                class="w-full bg-blue-600 hover:bg-blue-700 active:scale-[0.98] text-white font-bold py-4 rounded-xl shadow-lg shadow-blue-200 hover:shadow-xl transition-all duration-200 flex items-center justify-center gap-2 group">
                Submit Form
            </button>
        </form>
    </div>
@endsection

@section('footer')
    <h2>This is a footer</h2>
@endsection

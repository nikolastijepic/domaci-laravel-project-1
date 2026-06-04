@extends('layout')

@section('pageTitle')
    Contact
@endsection

@section('pageContent')
    <div class="grow flex items-center justify-center px-6 py-12">

        <div class="w-full max-w-2xl bg-slate-900 border border-slate-800 rounded-3xl shadow-xl p-8">

            <h1 class="text-4xl font-bold text-center mb-3">
                Contact Us
            </h1>

            <p class="text-slate-400 text-center mb-8">
                Have a question? Send us a message.
            </p>

            <form class="space-y-6">

                <div>
                    <label class="block mb-2 text-sm text-slate-300">
                        Email Address
                    </label>

                    <input
                        type="email"
                        placeholder="john@example.com"
                        class="w-full bg-slate-800 border border-slate-700 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-500"
                    >
                </div>

                <div>
                    <label class="block mb-2 text-sm text-slate-300">
                        Subject
                    </label>

                    <input
                        type="text"
                        placeholder="Enter subject"
                        class="w-full bg-slate-800 border border-slate-700 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-500"
                    >
                </div>

                <div>
                    <label class="block mb-2 text-sm text-slate-300">
                        Message
                    </label>

                    <textarea
                        rows="6"
                        placeholder="Write your message..."
                        class="w-full bg-slate-800 border border-slate-700 rounded-xl px-4 py-3 resize-none focus:outline-none focus:ring-2 focus:ring-blue-500"
                    ></textarea>
                </div>

                <button
                    type="submit"
                    class="w-full bg-blue-600 hover:bg-blue-500 rounded-xl py-3 font-semibold transition duration-200"
                >
                    Send Message
                </button>

            </form>

        </div>

    </div>
@endsection

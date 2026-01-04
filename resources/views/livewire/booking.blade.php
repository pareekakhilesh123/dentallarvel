<div>

    <!-- ================== SUB HEADER ================== -->
    <section id="subheader" class="bg-color-op-1 text-center">
        <div class="container relative z-2">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <h1 class="wow fadeInUp">Book Appointment</h1>
                    <div class="border-bottom my-3"></div>
                    <ul class="crumb wow fadeInDown">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li class="active">Book Appointment</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- ================== FORM SECTION ================== -->
    <section>
        <div class="container relative z-2">
            <div class="row g-4 gx-5 justify-content-between">

                <!-- ===== LEFT : FORM ===== -->
                <div class="col-lg-6">

                    {{-- Success Message --}}
                    @if (session()->has('success'))
                        <div class="alert alert-success mb-4">
                            {{ session('success') }}
                        </div>
                    @endif

                    {{-- Error Message --}}
                    @if (session()->has('error'))
                        <div class="alert alert-danger mb-4">
                            {{ session('error') }}
                        </div>
                    @endif

                    <form wire:submit.prevent="submitBooking">

                        <div class="row g-4">

                            <div class="col-lg-12">
                                <h3 class="mb-3">
                                    <i class="fa fa-envelope-o id-color me-2"></i>
                                    Book Your Appointment
                                </h3>
                                <p>
                                    Book your appointment today for expert dental care tailored to your needs.
                                </p>

                                <div class="relative">
                                  <select wire:model="service" class="form-control">
    <option value="">Select Service</option>
    <option>General Dentistry</option>
    <option>Cosmetic Dentistry</option>
    <option>Pediatric Dentistry</option>
    <option>Restorative Dentistry</option>
    <option>Preventive Dentistry</option>
    <option>Orthodontics</option>
</select>

@error('service')
    <small class="text-danger">{{ $message }}</small>
@enderror

                                    <i class="absolute top-0 end-0 id-color pt-3 pe-3 icofont-simple-down"></i>
                                </div>
                            </div>

                            <div class="col-lg-6">
                               <input type="date" wire:model="date" class="form-control">

@error('date')
    <small class="text-danger">{{ $message }}</small>
@enderror

                            </div>

                            <div class="col-lg-6">
                             <select wire:model="time" class="form-control">
    <option value="">Select Time</option>
    <option>10:00</option>
    <option>11:00</option>
    <option>12:00</option>
    <option>13:00</option>
    <option>14:00</option>
    <option>15:00</option>
    <option>16:00</option>
    <option>17:00</option>
    <option>18:00</option>
    <option>19:00</option>
    <option>20:00</option>
</select>

@error('time')
    <small class="text-danger">{{ $message }}</small>
@enderror

                            </div>

                            <div class="col-lg-4">
                                <input type="text" wire:model="name" class="form-control" placeholder="Name">
@error('name') <small class="text-danger">{{ $message }}</small> @enderror

                            </div>

                            <div class="col-lg-4">
                               <input type="email" wire:model="email" class="form-control" placeholder="Email">
@error('email') <small class="text-danger">{{ $message }}</small> @enderror

                            </div>

                            <div class="col-lg-4">
                               <input type="text" wire:model="phone" class="form-control" placeholder="Phone">
@error('phone') <small class="text-danger">{{ $message }}</small> @enderror

                            </div>

                            <div class="col-lg-12">
                                <textarea
                                    wire:model="message"
                                    class="form-control"
                                    placeholder="Message (optional)"
                                ></textarea>
                            </div>

                            <div class="col-lg-12">
                                <button
                                    type="submit"
                                    class="btn-main"
                                    wire:loading.attr="disabled"
                                >
                                    <span wire:loading.remove>Send Appointment</span>
                                    <span wire:loading>Please wait...</span>
                                </button>
                            </div>

                        </div>
                    </form>
                </div>

                <!-- ===== RIGHT : INFO ===== -->
                <div class="col-lg-6">
                    <div
                        class="h-100 rounded-1 relative"
                        style="background:url('{{ asset('images/misc/s4.webp') }}') center/cover"
                    >
                        <div class="bg-blur text-light shadow-1 abs start-10 bottom-10 p-4 rounded-1 z-2">
                            <div class="d-flex align-items-center">
                                <i class="fs-60 text-white icon_clock"></i>
                                <div class="ms-3">
                                    <h4 class="mb-0">Opening Hours</h4>
                                    Mon to Sat 08:00 - 20:00
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

</div>

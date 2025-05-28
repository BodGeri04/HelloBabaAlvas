<title>{{ $title ?? config('app.name') }}</title>
@extends('website.main')
@section('content')
    <!-- Page Title Section -->
    <section class="page-title" style="background-image: url(assets/images/gallery/WebsiteHeader2.png)">
        <div class="auto-container">
            <div class="content">
                <div class="text"></div>
                <h1>Adatkezelési tájékoztató</h1>
            </div>
            <div class="breadcrumb-outer">
                <ul class="page-breadcrumb">
                    <li><a href="/">Főoldal</a></li>
                    <li>Adatvédelem</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- End Page Title Section -->
    <!-- Adatkezeles Page Section -->
    <section class="faq-page-section">
        <div class="auto-container">
            <div class="row clearfix">
                <section class="max-w-4xl mx-auto p-6 text-gray-800">
                    <p class="mb-2"><strong>Hatályos:</strong> 2025. május 20-tól</p>

                    <h4 class="text-xl font-semibold mt-6 mb-2">1. Az adatkezelő adatai</h4>
                    <ul class="list-disc list-inside">
                        <li><strong>Név:</strong> Bod Orsolya (egyéni vállalkozó)</li>
                        <li><strong>Székhely:</strong> 1132 Budapest, Visegrádi utca 26/b.</li>
                        <li><strong>E-mail:</strong> hello@pihenjbaba.hu</li>
                        <li><strong>Telefon:</strong> +36 20 560 7609</li>
                        <li><strong>Weboldal:</strong> <a href="https://pihenjbaba.hu"
                                class="text-blue-600 hover:underline">https://pihenjbaba.hu</a></li>
                    </ul>

                    <h4 class="text-xl font-semibold mt-6 mb-2">2. A kezelt adatok köre</h4>
                    <p class="mb-2">A weboldalon elérhető szolgáltatás igénybevételéhez a felhasználó a következő adatokat
                        adhatja meg:</p>
                    <ul class="list-disc list-inside">
                        <li>Név</li>
                        <li>E-mail cím</li>
                        <li>Kapcsolatfelvételi üzenet tartalma</li>
                    </ul>
                    <p class="mt-2">Továbbá a rendszer ideiglenesen (kb. 48 órán keresztül) tárolja a blogcikkek
                        megtekintési idejét statisztikai célból.</p>

                    <h4 class="text-xl font-semibold mt-6 mb-2">3. Az adatkezelés célja</h4>
                    <ul class="list-disc list-inside">
                        <li>Kapcsolatfelvétel és visszajelzés biztosítása</li>
                        <li>Szolgáltatásra történő jelentkezések kezelése</li>
                        <li>A weboldal forgalmának elemzése (Google Analytics bevezetése után)</li>
                    </ul>

                    <h4 class="text-xl font-semibold mt-6 mb-2">4. Az adatkezelés jogalapja</h4>
                    <p>Az adatkezelés az érintett önkéntes hozzájárulásán alapul (GDPR 6. cikk (1) bekezdés a) pont).</p>

                    <h4 class="text-xl font-semibold mt-6 mb-2">5. Az adatokhoz hozzáférők köre</h4>
                    <ul class="list-disc list-inside">
                        <li>Az oldal adminisztrátora (1 darab)</li>
                        <li>Az oldal tulajdonosa (Bod Orsolya)</li>
                        <li>Tárhelyszolgáltató: Websupport Magyarország Kft. (1119 Budapest, Fehérvári út 97–99.)</li>
                    </ul>

                    <h4 class="text-xl font-semibold mt-6 mb-2">6. Adattárolás módja és helye</h4>
                    <p>Az adatok közvetlenül nem kerülnek adatbázisba mentésre. Az űrlapkitöltések során megadott adatok a
                        Gmail rendszerébe továbbítódnak.</p>

                    <h4 class="text-xl font-semibold mt-6 mb-2">7. Adatmegőrzés időtartama</h4>
                    <ul class="list-disc list-inside">
                        <li>Kapcsolatfelvételi adatok: az e-mail fiókban történő megőrzés idejéig</li>
                        <li>Blogmegtekintési adatok: kb. 2 nap</li>
                    </ul>

                    <h4 class="text-xl font-semibold mt-6 mb-2">8. Érintetti jogok</h4>
                    <p>A felhasználók kérhetik:</p>
                    <ul class="list-disc list-inside">
                        <li>Adataikhoz való hozzáférést</li>
                        <li>Az adatok törlését vagy helyesbítését</li>
                        <li>Az adatkezelés korlátozását</li>
                    </ul>
                    <p class="mt-2">Az ilyen irányú kérelmeket a <a href="mailto:hello@pihenjbaba.hu"
                            class="text-blue-600 hover:underline">hello@pihenjbaba.hu</a> címen lehet jelezni.</p>

                    <h4 class="text-xl font-semibold mt-6 mb-2">9. Cookie-k (sütik)</h4>
                    <p>A weboldal sütiket használ, melyekről a látogatót figyelmeztető sáv tájékoztatja. A sütik célja a
                        felhasználói élmény javítása, illetve statisztikai elemzés.</p>

                    <h4 class="text-xl font-semibold mt-6 mb-2">10. Jogorvoslati lehetőségek</h4>
                    <p>Amennyiben Ön úgy érzi, hogy az adatkezelés során jogsérelem érte, az alábbi szervekhez fordulhat:
                    </p>
                    <p class="mt-2"><strong>Nemzeti Adatvédelmi és Információszabadság Hatóság (NAIH)</strong><br>
                        1055 Budapest, Falk Miksa utca 9-11.<br>
                        Weboldal: <a href="https://naih.hu" target="_blank"
                            class="text-blue-600 hover:underline">https://naih.hu</a></p>
                </section>


            </div>
        </div>
    </section>
    <!-- End Adatkezeles Page Section -->
@endsection

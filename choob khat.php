<?php

$n = 4;
$list = [];
$answer = 0;
for ($i = 0; $i < $n; $i++){
    $a = intval(readline());
    array_push($list, $a);
}

$board_width = $list[0];
$board_height = $list[1];
$eraser_width = $list[2];
$eraser_height = $list[3];

$min_board = $board_height < $board_width ? $board_height : $board_width;
$max_eraser = $eraser_height > $eraser_width ? $eraser_height : $eraser_width;

$result = 0;

if ($max_eraser >= $min_board){
    $result = 1;
}else{
    $result = ceil($min_board / $max_eraser);
}

echo $result;



class RegistrationPageSeeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = $this->items();
        RegistrationPage::insert($items);
    }

    private function items()
    {
        $registration_pages = array(
            array('id' => '1',
                'language_id' => '1',
                'content' =>
                    '<div class="container">
<div class="mb-5 row text-center">
<div class="col-md-4 m-auto"><img src="/public/images/logos/Pizza-Click.com-logo-1.png" style="width:350px"></div>
</div>

<div class="row">
<div class="col-md-12">
<div class="card-box-1">
<div class="row">
<div class="col-md-6 order-1 order-md-1 px-0">
<div class="card-box-img"><img src="/public/frontend/img/pizza.jpg"></div>
</div>

<div class="col-md-6 order-2 order-md-2">
<div class="card-box-content">
<div class="content">
<p>Du hast ein Restaurant und willst <strong>keine Provision</strong> für Deinen Onlineshop oder Deine Kunden zahlen?</p>

<p>Oder möchtest Du eine geringe Provision oder eine <strong>professionelle</strong> Webseite ohne Onlineshop?</p>

<p>Du bietest einen <strong>Lieferservice</strong>, <strong>Abholung</strong> oder <strong>Bedienung vor Ort</strong> an und möchtest flexibel sein?</p>
</div>
</div>
</div>
</div>
</div>
</div>

<div class="col-md-12 mt-3">
<div class="card-box-1">
<div class="row">
<div class="col-md-6 order-2 order-md-1">
<div class="card-box-content">
<div class="content">
<p>Willst Du Zahlungsarten selbst auswählen oder ausschließen z.B. <strong>bar bezahlen</strong>, <strong>PayPal</strong>oder beides?</p>

<p>Benötigst Du ein <strong>Tischreservierungsprogramm</strong>?</p>

<p>Möchtest Du eine einfache Benutzung, individuelles Design, ein flexibles Preismodell, sowie Zeit und Geld sparen und <strong>zufriedene glücklich Kunden</strong> erhalten?</p>
</div>
</div>
</div>

<div class="col-md-6 order-1 order-md-2 px-0">
<div class="card-box-img"><img src="/public/frontend/img/sushi.jpg"></div>
</div>
</div>
</div>
</div>

<div class="col-md-12 py-5">
<h4>Dann ist Pizza-Click für Dich die richtige Wahl! Bei uns kannst Du alles selbst flexibel auswählen!</h4>
</div>

            <div class="col-md-12">
                <ul class="list-box">
                                            <li><i class="check">
                                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 408.576 408.576" style="enable-background:new 0 0 408.576 408.576;" xml:space="preserve">
<g>
    <g>
        <path d="M204.288,0C91.648,0,0,91.648,0,204.288s91.648,204.288,204.288,204.288s204.288-91.648,204.288-204.288
			S316.928,0,204.288,0z M318.464,150.528l-130.56,129.536c-7.68,7.68-19.968,8.192-28.16,0.512L90.624,217.6
			c-8.192-7.68-8.704-20.48-1.536-28.672c7.68-8.192,20.48-8.704,28.672-1.024l54.784,50.176L289.28,121.344
			c8.192-8.192,20.992-8.192,29.184,0C326.656,129.536,326.656,142.336,318.464,150.528z"></path>
    </g>
</g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                </svg>
                            </i>
                            Dein eigenes Onlineshopsystem
                        </li>
                                            <li><i class="check">
                                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 408.576 408.576" style="enable-background:new 0 0 408.576 408.576;" xml:space="preserve">
<g>
    <g>
        <path d="M204.288,0C91.648,0,0,91.648,0,204.288s91.648,204.288,204.288,204.288s204.288-91.648,204.288-204.288
			S316.928,0,204.288,0z M318.464,150.528l-130.56,129.536c-7.68,7.68-19.968,8.192-28.16,0.512L90.624,217.6
			c-8.192-7.68-8.704-20.48-1.536-28.672c7.68-8.192,20.48-8.704,28.672-1.024l54.784,50.176L289.28,121.344
			c8.192-8.192,20.992-8.192,29.184,0C326.656,129.536,326.656,142.336,318.464,150.528z"></path>
    </g>
</g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                </svg>
                            </i>
                            Dein eigenes modernes Design
                        </li>
                                            <li><i class="check">
                                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 408.576 408.576" style="enable-background:new 0 0 408.576 408.576;" xml:space="preserve">
<g>
    <g>
        <path d="M204.288,0C91.648,0,0,91.648,0,204.288s91.648,204.288,204.288,204.288s204.288-91.648,204.288-204.288
			S316.928,0,204.288,0z M318.464,150.528l-130.56,129.536c-7.68,7.68-19.968,8.192-28.16,0.512L90.624,217.6
			c-8.192-7.68-8.704-20.48-1.536-28.672c7.68-8.192,20.48-8.704,28.672-1.024l54.784,50.176L289.28,121.344
			c8.192-8.192,20.992-8.192,29.184,0C326.656,129.536,326.656,142.336,318.464,150.528z"></path>
    </g>
</g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                </svg>
                            </i>
                            mit oder ohne PayPal
                        </li>
                                            <li><i class="check">
                                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 408.576 408.576" style="enable-background:new 0 0 408.576 408.576;" xml:space="preserve">
<g>
    <g>
        <path d="M204.288,0C91.648,0,0,91.648,0,204.288s91.648,204.288,204.288,204.288s204.288-91.648,204.288-204.288
			S316.928,0,204.288,0z M318.464,150.528l-130.56,129.536c-7.68,7.68-19.968,8.192-28.16,0.512L90.624,217.6
			c-8.192-7.68-8.704-20.48-1.536-28.672c7.68-8.192,20.48-8.704,28.672-1.024l54.784,50.176L289.28,121.344
			c8.192-8.192,20.992-8.192,29.184,0C326.656,129.536,326.656,142.336,318.464,150.528z"></path>
    </g>
</g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                </svg>
                            </i>
                            Deine Sichtbarkeit steigern
                        </li>
                                            <li><i class="check">
                                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 408.576 408.576" style="enable-background:new 0 0 408.576 408.576;" xml:space="preserve">
<g>
    <g>
        <path d="M204.288,0C91.648,0,0,91.648,0,204.288s91.648,204.288,204.288,204.288s204.288-91.648,204.288-204.288
			S316.928,0,204.288,0z M318.464,150.528l-130.56,129.536c-7.68,7.68-19.968,8.192-28.16,0.512L90.624,217.6
			c-8.192-7.68-8.704-20.48-1.536-28.672c7.68-8.192,20.48-8.704,28.672-1.024l54.784,50.176L289.28,121.344
			c8.192-8.192,20.992-8.192,29.184,0C326.656,129.536,326.656,142.336,318.464,150.528z"></path>
    </g>
</g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                </svg>
                            </i>
                            mehr neue Kunden erhalten
                        </li>
                                            <li><i class="check">
                                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 408.576 408.576" style="enable-background:new 0 0 408.576 408.576;" xml:space="preserve">
<g>
    <g>
        <path d="M204.288,0C91.648,0,0,91.648,0,204.288s91.648,204.288,204.288,204.288s204.288-91.648,204.288-204.288
			S316.928,0,204.288,0z M318.464,150.528l-130.56,129.536c-7.68,7.68-19.968,8.192-28.16,0.512L90.624,217.6
			c-8.192-7.68-8.704-20.48-1.536-28.672c7.68-8.192,20.48-8.704,28.672-1.024l54.784,50.176L289.28,121.344
			c8.192-8.192,20.992-8.192,29.184,0C326.656,129.536,326.656,142.336,318.464,150.528z"></path>
    </g>
</g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                </svg>
                            </i>
                            Werbepartner werden und profitieren
                        </li>
                                            <li><i class="check">
                                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 408.576 408.576" style="enable-background:new 0 0 408.576 408.576;" xml:space="preserve">
<g>
    <g>
        <path d="M204.288,0C91.648,0,0,91.648,0,204.288s91.648,204.288,204.288,204.288s204.288-91.648,204.288-204.288
			S316.928,0,204.288,0z M318.464,150.528l-130.56,129.536c-7.68,7.68-19.968,8.192-28.16,0.512L90.624,217.6
			c-8.192-7.68-8.704-20.48-1.536-28.672c7.68-8.192,20.48-8.704,28.672-1.024l54.784,50.176L289.28,121.344
			c8.192-8.192,20.992-8.192,29.184,0C326.656,129.536,326.656,142.336,318.464,150.528z"></path>
    </g>
</g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                </svg>
                            </i>
                            Zeit gewinnen
                        </li>
                                            <li><i class="check">
                                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 408.576 408.576" style="enable-background:new 0 0 408.576 408.576;" xml:space="preserve">
<g>
    <g>
        <path d="M204.288,0C91.648,0,0,91.648,0,204.288s91.648,204.288,204.288,204.288s204.288-91.648,204.288-204.288
			S316.928,0,204.288,0z M318.464,150.528l-130.56,129.536c-7.68,7.68-19.968,8.192-28.16,0.512L90.624,217.6
			c-8.192-7.68-8.704-20.48-1.536-28.672c7.68-8.192,20.48-8.704,28.672-1.024l54.784,50.176L289.28,121.344
			c8.192-8.192,20.992-8.192,29.184,0C326.656,129.536,326.656,142.336,318.464,150.528z"></path>
    </g>
</g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                </svg>
                            </i>
                            flexibel mit oder ohne Provision
                        </li>
                                            <li><i class="check">
                                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 408.576 408.576" style="enable-background:new 0 0 408.576 408.576;" xml:space="preserve">
<g>
    <g>
        <path d="M204.288,0C91.648,0,0,91.648,0,204.288s91.648,204.288,204.288,204.288s204.288-91.648,204.288-204.288
			S316.928,0,204.288,0z M318.464,150.528l-130.56,129.536c-7.68,7.68-19.968,8.192-28.16,0.512L90.624,217.6
			c-8.192-7.68-8.704-20.48-1.536-28.672c7.68-8.192,20.48-8.704,28.672-1.024l54.784,50.176L289.28,121.344
			c8.192-8.192,20.992-8.192,29.184,0C326.656,129.536,326.656,142.336,318.464,150.528z"></path>
    </g>
</g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                </svg>
                            </i>
                            mehr Bestellungen gewinnen
                        </li>
                                            <li><i class="check">
                                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 408.576 408.576" style="enable-background:new 0 0 408.576 408.576;" xml:space="preserve">
<g>
    <g>
        <path d="M204.288,0C91.648,0,0,91.648,0,204.288s91.648,204.288,204.288,204.288s204.288-91.648,204.288-204.288
			S316.928,0,204.288,0z M318.464,150.528l-130.56,129.536c-7.68,7.68-19.968,8.192-28.16,0.512L90.624,217.6
			c-8.192-7.68-8.704-20.48-1.536-28.672c7.68-8.192,20.48-8.704,28.672-1.024l54.784,50.176L289.28,121.344
			c8.192-8.192,20.992-8.192,29.184,0C326.656,129.536,326.656,142.336,318.464,150.528z"></path>
    </g>
</g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                </svg>
                            </i>
                            Adminseite mit Nutzerverwaltung
                        </li>
                                            <li><i class="check">
                                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 408.576 408.576" style="enable-background:new 0 0 408.576 408.576;" xml:space="preserve">
<g>
    <g>
        <path d="M204.288,0C91.648,0,0,91.648,0,204.288s91.648,204.288,204.288,204.288s204.288-91.648,204.288-204.288
			S316.928,0,204.288,0z M318.464,150.528l-130.56,129.536c-7.68,7.68-19.968,8.192-28.16,0.512L90.624,217.6
			c-8.192-7.68-8.704-20.48-1.536-28.672c7.68-8.192,20.48-8.704,28.672-1.024l54.784,50.176L289.28,121.344
			c8.192-8.192,20.992-8.192,29.184,0C326.656,129.536,326.656,142.336,318.464,150.528z"></path>
    </g>
</g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                </svg>
                            </i>
                            Happy Hour &amp; Tischreservierung
                        </li>
                                            <li><i class="check">
                                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 408.576 408.576" style="enable-background:new 0 0 408.576 408.576;" xml:space="preserve">
<g>
    <g>
        <path d="M204.288,0C91.648,0,0,91.648,0,204.288s91.648,204.288,204.288,204.288s204.288-91.648,204.288-204.288
			S316.928,0,204.288,0z M318.464,150.528l-130.56,129.536c-7.68,7.68-19.968,8.192-28.16,0.512L90.624,217.6
			c-8.192-7.68-8.704-20.48-1.536-28.672c7.68-8.192,20.48-8.704,28.672-1.024l54.784,50.176L289.28,121.344
			c8.192-8.192,20.992-8.192,29.184,0C326.656,129.536,326.656,142.336,318.464,150.528z"></path>
    </g>
</g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                </svg>
                            </i>
                            zeitlich limitierte Angebote
                        </li>
                                            <li><i class="check">
                                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 408.576 408.576" style="enable-background:new 0 0 408.576 408.576;" xml:space="preserve">
<g>
    <g>
        <path d="M204.288,0C91.648,0,0,91.648,0,204.288s91.648,204.288,204.288,204.288s204.288-91.648,204.288-204.288
			S316.928,0,204.288,0z M318.464,150.528l-130.56,129.536c-7.68,7.68-19.968,8.192-28.16,0.512L90.624,217.6
			c-8.192-7.68-8.704-20.48-1.536-28.672c7.68-8.192,20.48-8.704,28.672-1.024l54.784,50.176L289.28,121.344
			c8.192-8.192,20.992-8.192,29.184,0C326.656,129.536,326.656,142.336,318.464,150.528z"></path>
    </g>
</g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                </svg>
                            </i>
                            mit oder ohne Lieferservice
                        </li>
                                            <li><i class="check">
                                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 408.576 408.576" style="enable-background:new 0 0 408.576 408.576;" xml:space="preserve">
<g>
    <g>
        <path d="M204.288,0C91.648,0,0,91.648,0,204.288s91.648,204.288,204.288,204.288s204.288-91.648,204.288-204.288
			S316.928,0,204.288,0z M318.464,150.528l-130.56,129.536c-7.68,7.68-19.968,8.192-28.16,0.512L90.624,217.6
			c-8.192-7.68-8.704-20.48-1.536-28.672c7.68-8.192,20.48-8.704,28.672-1.024l54.784,50.176L289.28,121.344
			c8.192-8.192,20.992-8.192,29.184,0C326.656,129.536,326.656,142.336,318.464,150.528z"></path>
    </g>
</g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                </svg>
                            </i>
                            Verkäufe mit Produktkombinationen
                        </li>
                                    </ul>
            </div>

<div class="col-md-12 mt-5">
<h3 class="text-center">Jetzt kostenlos registrieren auf www.pizza-click.com<br>Shop mit allen Gerichten erstellen und direkt online verkaufen!</h3>
</div>

            <div class="col-md-12 mt-4">
                <h3 class="text-center font-weight-bold m-0 px-5 py-4">
                    aktuelles Angebot: Jetzt für <span class="text-red">0 €</span> einmalige Einrichtungsgebühr statt <span class="text-red">199 €</span>
                </h3>
            </div>

<div class="col-md-12 mt-4">
<div class="card card-v2">
<div class="card-header">
<h4>Shopverwaltung</h4>
</div>

<div class="card-body">
<ul>
	<li><strong>Zweck: </strong> Premium Onlineshop (49 Euro/Monat oder 10% Provision) oder professionelle Webseite (29 Euro/Monat).</li>
	<li><strong>Lieferservice: </strong> Mit oder ohne Lieferservice, Abholung und/oder Bedienung vor Ort.</li>
	<li><strong>Bezahlmodell: </strong> Onlineshop mit oder ohne Provision.</li>
	<li><strong>Allgemeine Daten: </strong> Shopname, Adresse, Telefonnummer, Shopsprache, Öffnungszeiten, Lieferzeiten und Sonderöffnungszeiten.</li>
	<li><strong>Social Media: </strong> Facebook, Instagram, YouTube, Twitter, Whatsapp und Telegram Links.</li>
	<li><strong>Benachrichtigungsmethode: </strong> Fax, E-Mail oder beide.</li>
	<li><strong>Tischreservierung: </strong> Mit oder ohne Tischreserveierungsprogramm (19 Euro/Monat).</li>
	<li><strong>Kundenzahlungsarte: </strong> Bar bezahlen und/oder PayPal.</li>
	<li><strong>Design: </strong> Bilderauswahl für Slider, Parallax, Hintergrund und Farbauswahl.</li>
	<li><strong>Liefergebiete: </strong> Postleitzahlenauswahl mit Mindestbestellwerten, Lieferkostenauswahl.</li>
	<li><strong>Marketing: </strong> Slogan und Geschenke.</li>
</ul>
</div>
</div>
</div>

<div class="col-md-12 mt-4">
<div class="card card-v2">
<div class="card-header">
<h4>Produktverwaltung</h4>
</div>

<div class="card-body">
<ul>
	<li><strong>Artikeltypen: </strong> Individuell mit Bildauswahl z.B. Pizza, Pasta, Sushi und viele mehr.</li>
	<li><strong>Artikel-Subtypen: </strong> Fexibel (z.B. klein, mittel, groß) und extra Zutaten.</li>
	<li><strong>Artikelinformationen: </strong> Artikelname, Beschreibung, Artikelnummer und Bild.</li>
	<li><strong>Preismanagement: </strong> Bedienungspreis, Abholpreis, Lieferpreis, Stammkundenpreis.</li>
	<li><strong>Produktkombinationen: </strong> Mehr verkaufen durch direkte Produktkombination.</li>
	<li><strong>Marketingaktionen: </strong> Happy Hour, Angebot zwischen zwei Daten und weiteren Angeboten.</li>
</ul>
</div>
</div>
</div>

<div class="col-md-12 mt-4">
<div class="card card-v2">
<div class="card-header">
<h4>Außerdem</h4>
</div>

<div class="card-body">
<ul>
	<li><strong>Rollenverwaltung: </strong> Fahrer, Koch, Verwaltung und mehr.</li>
	<li><strong>Sprachauswahl: </strong> Adminseite in Deutsch / Englisch.</li>
	<li><strong>Telefonisches Bestellprogramm: </strong> Einfache schnell Abwicklung (19 Euro/Monat).</li>
	<li><strong>Werbepartnerprogramm: </strong> Werben und profitieren.</li>
	<li><strong>Erreichbarkeit: </strong> Auf Pizza-Click.com oder eigener Domain wie z.B. <a href="http://www.muster-pizza.de">www.muster-pizza.de</a>.</li>
</ul>
</div>
</div>
</div>

            <div class="col-md-12 mt-5">
                <div class="list-box pb-0">
                    <div class="row w-100">
                        <div class="col-md-6">
                            <ul class="list-unstyled">
                                                                    <li>
                                        <span class="counter">1</span>
                                        Deine Shopdaten eingeben
                                    </li>
                                                                    <li>
                                        <span class="counter">2</span>
                                        Produkte eintippen
                                    </li>
                                                                    <li>
                                        <span class="counter">3</span>
                                        Webseite ist automatisch fertig
                                    </li>
                                                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul class="list-unstyled">
                                                                    <li class="success-color font-italic"><i class="check">
                                            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 408.576 408.576" style="enable-background:new 0 0 408.576 408.576;" xml:space="preserve">
<g>
    <g>
        <path d="M204.288,0C91.648,0,0,91.648,0,204.288s91.648,204.288,204.288,204.288s204.288-91.648,204.288-204.288
			S316.928,0,204.288,0z M318.464,150.528l-130.56,129.536c-7.68,7.68-19.968,8.192-28.16,0.512L90.624,217.6
			c-8.192-7.68-8.704-20.48-1.536-28.672c7.68-8.192,20.48-8.704,28.672-1.024l54.784,50.176L289.28,121.344
			c8.192-8.192,20.992-8.192,29.184,0C326.656,129.536,326.656,142.336,318.464,150.528z"></path>
    </g>
</g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                </svg>
                                        </i>
                                        Verkaufen und mehr Bestellungen erhalten
                                    </li>
                                                                    <li class="success-color font-italic"><i class="check">
                                            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 408.576 408.576" style="enable-background:new 0 0 408.576 408.576;" xml:space="preserve">
<g>
    <g>
        <path d="M204.288,0C91.648,0,0,91.648,0,204.288s91.648,204.288,204.288,204.288s204.288-91.648,204.288-204.288
			S316.928,0,204.288,0z M318.464,150.528l-130.56,129.536c-7.68,7.68-19.968,8.192-28.16,0.512L90.624,217.6
			c-8.192-7.68-8.704-20.48-1.536-28.672c7.68-8.192,20.48-8.704,28.672-1.024l54.784,50.176L289.28,121.344
			c8.192-8.192,20.992-8.192,29.184,0C326.656,129.536,326.656,142.336,318.464,150.528z"></path>
    </g>
</g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                </svg>
                                        </i>
                                        Kunden an Restaurant binden
                                    </li>
                                                                    <li class="success-color font-italic"><i class="check">
                                            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 408.576 408.576" style="enable-background:new 0 0 408.576 408.576;" xml:space="preserve">
<g>
    <g>
        <path d="M204.288,0C91.648,0,0,91.648,0,204.288s91.648,204.288,204.288,204.288s204.288-91.648,204.288-204.288
			S316.928,0,204.288,0z M318.464,150.528l-130.56,129.536c-7.68,7.68-19.968,8.192-28.16,0.512L90.624,217.6
			c-8.192-7.68-8.704-20.48-1.536-28.672c7.68-8.192,20.48-8.704,28.672-1.024l54.784,50.176L289.28,121.344
			c8.192-8.192,20.992-8.192,29.184,0C326.656,129.536,326.656,142.336,318.464,150.528z"></path>
    </g>
</g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                </svg>
                                        </i>
                                        Gewinn steigern durch unser flexibles Preismodell
                                    </li>
                                                            </ul>
                        </div>
                    </div>
                </div>
            </div>

<div class="col-md-12 mt-4">
<h3>Schnell Deine eigene individuelle Webseite mit Bestellfunktion automatisch erstellen lassen. Ein Beispiel findest Du unter <a href="http://muster-pizza.de" target="_blank">www.muster-pizza.de</a></h3>
</div>
</div>
</div>
', 'created_by_user_id' => '2', 'updated_by_user_id' => '2', 'created_at' => '2020-12-19 05:45:26', 'updated_at' => '2020-12-19 05:45:26', 'deleted_at' => NULL),
            array('id' => '2', 'language_id' => '2', 'content' => '<div class="container">
<div class="mb-5 row text-center">
<div class="col-md-4 m-auto"><img src="/public/images/logos/Pizza-Click.com-logo-1.png" style="width:350px"></div>
</div>

<div class="row">
<div class="col-md-12">
<div class="card-box-1">
<div class="row">
<div class="col-md-6 order-1 order-md-1 px-0">
<div class="card-box-img"><img src="/public/frontend/img/pizza.jpg"></div>
</div>

<div class="col-md-6 order-2 order-md-2">
<div class="card-box-content">
<div class="content">
<p>Du hast ein Restaurant und willst <strong>keine Provision</strong> für Deinen Onlineshop oder Deine Kunden zahlen?</p>

<p>Oder möchtest Du eine geringe Provision oder eine <strong>professionelle</strong> Webseite ohne Onlineshop?</p>

<p>Du bietest einen <strong>Lieferservice</strong>, <strong>Abholung</strong> oder <strong>Bedienung vor Ort</strong> an und möchtest flexibel sein?</p>
</div>
</div>
</div>
</div>
</div>
</div>

<div class="col-md-12 mt-3">
<div class="card-box-1">
<div class="row">
<div class="col-md-6 order-2 order-md-1">
<div class="card-box-content">
<div class="content">
<p>Willst Du Zahlungsarten selbst auswählen oder ausschließen z.B. <strong>bar bezahlen</strong>, <strong>PayPal</strong>oder beides?</p>

<p>Benötigst Du ein <strong>Tischreservierungsprogramm</strong>?</p>

<p>Möchtest Du eine einfache Benutzung, individuelles Design, ein flexibles Preismodell, sowie Zeit und Geld sparen und <strong>zufriedene glücklich Kunden</strong> erhalten?</p>
</div>
</div>
</div>

<div class="col-md-6 order-1 order-md-2 px-0">
<div class="card-box-img"><img src="/public/frontend/img/sushi.jpg"></div>
</div>
</div>
</div>
</div>

<div class="col-md-12 py-5">
<h4>Dann ist Pizza-Click für Dich die richtige Wahl! Bei uns kannst Du alles selbst flexibel auswählen!</h4>
</div>

            <div class="col-md-12">
                <ul class="list-box">
                                            <li><i class="check">
                                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 408.576 408.576" style="enable-background:new 0 0 408.576 408.576;" xml:space="preserve">
<g>
    <g>
        <path d="M204.288,0C91.648,0,0,91.648,0,204.288s91.648,204.288,204.288,204.288s204.288-91.648,204.288-204.288
			S316.928,0,204.288,0z M318.464,150.528l-130.56,129.536c-7.68,7.68-19.968,8.192-28.16,0.512L90.624,217.6
			c-8.192-7.68-8.704-20.48-1.536-28.672c7.68-8.192,20.48-8.704,28.672-1.024l54.784,50.176L289.28,121.344
			c8.192-8.192,20.992-8.192,29.184,0C326.656,129.536,326.656,142.336,318.464,150.528z"></path>
    </g>
</g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                </svg>
                            </i>
                            Dein eigenes Onlineshopsystem
                        </li>
                                            <li><i class="check">
                                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 408.576 408.576" style="enable-background:new 0 0 408.576 408.576;" xml:space="preserve">
<g>
    <g>
        <path d="M204.288,0C91.648,0,0,91.648,0,204.288s91.648,204.288,204.288,204.288s204.288-91.648,204.288-204.288
			S316.928,0,204.288,0z M318.464,150.528l-130.56,129.536c-7.68,7.68-19.968,8.192-28.16,0.512L90.624,217.6
			c-8.192-7.68-8.704-20.48-1.536-28.672c7.68-8.192,20.48-8.704,28.672-1.024l54.784,50.176L289.28,121.344
			c8.192-8.192,20.992-8.192,29.184,0C326.656,129.536,326.656,142.336,318.464,150.528z"></path>
    </g>
</g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                </svg>
                            </i>
                            Dein eigenes modernes Design
                        </li>
                                            <li><i class="check">
                                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 408.576 408.576" style="enable-background:new 0 0 408.576 408.576;" xml:space="preserve">
<g>
    <g>
        <path d="M204.288,0C91.648,0,0,91.648,0,204.288s91.648,204.288,204.288,204.288s204.288-91.648,204.288-204.288
			S316.928,0,204.288,0z M318.464,150.528l-130.56,129.536c-7.68,7.68-19.968,8.192-28.16,0.512L90.624,217.6
			c-8.192-7.68-8.704-20.48-1.536-28.672c7.68-8.192,20.48-8.704,28.672-1.024l54.784,50.176L289.28,121.344
			c8.192-8.192,20.992-8.192,29.184,0C326.656,129.536,326.656,142.336,318.464,150.528z"></path>
    </g>
</g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                </svg>
                            </i>
                            mit oder ohne PayPal
                        </li>
                                            <li><i class="check">
                                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 408.576 408.576" style="enable-background:new 0 0 408.576 408.576;" xml:space="preserve">
<g>
    <g>
        <path d="M204.288,0C91.648,0,0,91.648,0,204.288s91.648,204.288,204.288,204.288s204.288-91.648,204.288-204.288
			S316.928,0,204.288,0z M318.464,150.528l-130.56,129.536c-7.68,7.68-19.968,8.192-28.16,0.512L90.624,217.6
			c-8.192-7.68-8.704-20.48-1.536-28.672c7.68-8.192,20.48-8.704,28.672-1.024l54.784,50.176L289.28,121.344
			c8.192-8.192,20.992-8.192,29.184,0C326.656,129.536,326.656,142.336,318.464,150.528z"></path>
    </g>
</g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                </svg>
                            </i>
                            Deine Sichtbarkeit steigern
                        </li>
                                            <li><i class="check">
                                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 408.576 408.576" style="enable-background:new 0 0 408.576 408.576;" xml:space="preserve">
<g>
    <g>
        <path d="M204.288,0C91.648,0,0,91.648,0,204.288s91.648,204.288,204.288,204.288s204.288-91.648,204.288-204.288
			S316.928,0,204.288,0z M318.464,150.528l-130.56,129.536c-7.68,7.68-19.968,8.192-28.16,0.512L90.624,217.6
			c-8.192-7.68-8.704-20.48-1.536-28.672c7.68-8.192,20.48-8.704,28.672-1.024l54.784,50.176L289.28,121.344
			c8.192-8.192,20.992-8.192,29.184,0C326.656,129.536,326.656,142.336,318.464,150.528z"></path>
    </g>
</g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                </svg>
                            </i>
                            mehr neue Kunden erhalten
                        </li>
                                            <li><i class="check">
                                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 408.576 408.576" style="enable-background:new 0 0 408.576 408.576;" xml:space="preserve">
<g>
    <g>
        <path d="M204.288,0C91.648,0,0,91.648,0,204.288s91.648,204.288,204.288,204.288s204.288-91.648,204.288-204.288
			S316.928,0,204.288,0z M318.464,150.528l-130.56,129.536c-7.68,7.68-19.968,8.192-28.16,0.512L90.624,217.6
			c-8.192-7.68-8.704-20.48-1.536-28.672c7.68-8.192,20.48-8.704,28.672-1.024l54.784,50.176L289.28,121.344
			c8.192-8.192,20.992-8.192,29.184,0C326.656,129.536,326.656,142.336,318.464,150.528z"></path>
    </g>
</g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                </svg>
                            </i>
                            Werbepartner werden und profitieren
                        </li>
                                            <li><i class="check">
                                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 408.576 408.576" style="enable-background:new 0 0 408.576 408.576;" xml:space="preserve">
<g>
    <g>
        <path d="M204.288,0C91.648,0,0,91.648,0,204.288s91.648,204.288,204.288,204.288s204.288-91.648,204.288-204.288
			S316.928,0,204.288,0z M318.464,150.528l-130.56,129.536c-7.68,7.68-19.968,8.192-28.16,0.512L90.624,217.6
			c-8.192-7.68-8.704-20.48-1.536-28.672c7.68-8.192,20.48-8.704,28.672-1.024l54.784,50.176L289.28,121.344
			c8.192-8.192,20.992-8.192,29.184,0C326.656,129.536,326.656,142.336,318.464,150.528z"></path>
    </g>
</g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                </svg>
                            </i>
                            Zeit gewinnen
                        </li>
                                            <li><i class="check">
                                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 408.576 408.576" style="enable-background:new 0 0 408.576 408.576;" xml:space="preserve">
<g>
    <g>
        <path d="M204.288,0C91.648,0,0,91.648,0,204.288s91.648,204.288,204.288,204.288s204.288-91.648,204.288-204.288
			S316.928,0,204.288,0z M318.464,150.528l-130.56,129.536c-7.68,7.68-19.968,8.192-28.16,0.512L90.624,217.6
			c-8.192-7.68-8.704-20.48-1.536-28.672c7.68-8.192,20.48-8.704,28.672-1.024l54.784,50.176L289.28,121.344
			c8.192-8.192,20.992-8.192,29.184,0C326.656,129.536,326.656,142.336,318.464,150.528z"></path>
    </g>
</g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                </svg>
                            </i>
                            flexibel mit oder ohne Provision
                        </li>
                                            <li><i class="check">
                                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 408.576 408.576" style="enable-background:new 0 0 408.576 408.576;" xml:space="preserve">
<g>
    <g>
        <path d="M204.288,0C91.648,0,0,91.648,0,204.288s91.648,204.288,204.288,204.288s204.288-91.648,204.288-204.288
			S316.928,0,204.288,0z M318.464,150.528l-130.56,129.536c-7.68,7.68-19.968,8.192-28.16,0.512L90.624,217.6
			c-8.192-7.68-8.704-20.48-1.536-28.672c7.68-8.192,20.48-8.704,28.672-1.024l54.784,50.176L289.28,121.344
			c8.192-8.192,20.992-8.192,29.184,0C326.656,129.536,326.656,142.336,318.464,150.528z"></path>
    </g>
</g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                </svg>
                            </i>
                            mehr Bestellungen gewinnen
                        </li>
                                            <li><i class="check">
                                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 408.576 408.576" style="enable-background:new 0 0 408.576 408.576;" xml:space="preserve">
<g>
    <g>
        <path d="M204.288,0C91.648,0,0,91.648,0,204.288s91.648,204.288,204.288,204.288s204.288-91.648,204.288-204.288
			S316.928,0,204.288,0z M318.464,150.528l-130.56,129.536c-7.68,7.68-19.968,8.192-28.16,0.512L90.624,217.6
			c-8.192-7.68-8.704-20.48-1.536-28.672c7.68-8.192,20.48-8.704,28.672-1.024l54.784,50.176L289.28,121.344
			c8.192-8.192,20.992-8.192,29.184,0C326.656,129.536,326.656,142.336,318.464,150.528z"></path>
    </g>
</g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                </svg>
                            </i>
                            Adminseite mit Nutzerverwaltung
                        </li>
                                            <li><i class="check">
                                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 408.576 408.576" style="enable-background:new 0 0 408.576 408.576;" xml:space="preserve">
<g>
    <g>
        <path d="M204.288,0C91.648,0,0,91.648,0,204.288s91.648,204.288,204.288,204.288s204.288-91.648,204.288-204.288
			S316.928,0,204.288,0z M318.464,150.528l-130.56,129.536c-7.68,7.68-19.968,8.192-28.16,0.512L90.624,217.6
			c-8.192-7.68-8.704-20.48-1.536-28.672c7.68-8.192,20.48-8.704,28.672-1.024l54.784,50.176L289.28,121.344
			c8.192-8.192,20.992-8.192,29.184,0C326.656,129.536,326.656,142.336,318.464,150.528z"></path>
    </g>
</g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                </svg>
                            </i>
                            Happy Hour &amp; Tischreservierung
                        </li>
                                            <li><i class="check">
                                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 408.576 408.576" style="enable-background:new 0 0 408.576 408.576;" xml:space="preserve">
<g>
    <g>
        <path d="M204.288,0C91.648,0,0,91.648,0,204.288s91.648,204.288,204.288,204.288s204.288-91.648,204.288-204.288
			S316.928,0,204.288,0z M318.464,150.528l-130.56,129.536c-7.68,7.68-19.968,8.192-28.16,0.512L90.624,217.6
			c-8.192-7.68-8.704-20.48-1.536-28.672c7.68-8.192,20.48-8.704,28.672-1.024l54.784,50.176L289.28,121.344
			c8.192-8.192,20.992-8.192,29.184,0C326.656,129.536,326.656,142.336,318.464,150.528z"></path>
    </g>
</g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                </svg>
                            </i>
                            zeitlich limitierte Angebote
                        </li>
                                            <li><i class="check">
                                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 408.576 408.576" style="enable-background:new 0 0 408.576 408.576;" xml:space="preserve">
<g>
    <g>
        <path d="M204.288,0C91.648,0,0,91.648,0,204.288s91.648,204.288,204.288,204.288s204.288-91.648,204.288-204.288
			S316.928,0,204.288,0z M318.464,150.528l-130.56,129.536c-7.68,7.68-19.968,8.192-28.16,0.512L90.624,217.6
			c-8.192-7.68-8.704-20.48-1.536-28.672c7.68-8.192,20.48-8.704,28.672-1.024l54.784,50.176L289.28,121.344
			c8.192-8.192,20.992-8.192,29.184,0C326.656,129.536,326.656,142.336,318.464,150.528z"></path>
    </g>
</g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                </svg>
                            </i>
                            mit oder ohne Lieferservice
                        </li>
                                            <li><i class="check">
                                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 408.576 408.576" style="enable-background:new 0 0 408.576 408.576;" xml:space="preserve">
<g>
    <g>
        <path d="M204.288,0C91.648,0,0,91.648,0,204.288s91.648,204.288,204.288,204.288s204.288-91.648,204.288-204.288
			S316.928,0,204.288,0z M318.464,150.528l-130.56,129.536c-7.68,7.68-19.968,8.192-28.16,0.512L90.624,217.6
			c-8.192-7.68-8.704-20.48-1.536-28.672c7.68-8.192,20.48-8.704,28.672-1.024l54.784,50.176L289.28,121.344
			c8.192-8.192,20.992-8.192,29.184,0C326.656,129.536,326.656,142.336,318.464,150.528z"></path>
    </g>
</g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                </svg>
                            </i>
                            Verkäufe mit Produktkombinationen
                        </li>
                                    </ul>
            </div>

<div class="col-md-12 mt-5">
<h3 class="text-center">Jetzt kostenlos registrieren auf www.pizza-click.com<br>Shop mit allen Gerichten erstellen und direkt online verkaufen!</h3>
</div>

            <div class="col-md-12 mt-4">
                <h3 class="text-center font-weight-bold m-0 px-5 py-4">
                    aktuelles Angebot: Jetzt für <span class="text-red">0 €</span> einmalige Einrichtungsgebühr statt <span class="text-red">199 €</span>
                </h3>
            </div>

<div class="col-md-12 mt-4">
<div class="card card-v2">
<div class="card-header">
<h4>Shopverwaltung</h4>
</div>

<div class="card-body">
<ul>
	<li><strong>Zweck: </strong> Premium Onlineshop (49 Euro/Monat oder 10% Provision) oder professionelle Webseite (29 Euro/Monat).</li>
	<li><strong>Lieferservice: </strong> Mit oder ohne Lieferservice, Abholung und/oder Bedienung vor Ort.</li>
	<li><strong>Bezahlmodell: </strong> Onlineshop mit oder ohne Provision.</li>
	<li><strong>Allgemeine Daten: </strong> Shopname, Adresse, Telefonnummer, Shopsprache, Öffnungszeiten, Lieferzeiten und Sonderöffnungszeiten.</li>
	<li><strong>Social Media: </strong> Facebook, Instagram, YouTube, Twitter, Whatsapp und Telegram Links.</li>
	<li><strong>Benachrichtigungsmethode: </strong> Fax, E-Mail oder beide.</li>
	<li><strong>Tischreservierung: </strong> Mit oder ohne Tischreserveierungsprogramm (19 Euro/Monat).</li>
	<li><strong>Kundenzahlungsarte: </strong> Bar bezahlen und/oder PayPal.</li>
	<li><strong>Design: </strong> Bilderauswahl für Slider, Parallax, Hintergrund und Farbauswahl.</li>
	<li><strong>Liefergebiete: </strong> Postleitzahlenauswahl mit Mindestbestellwerten, Lieferkostenauswahl.</li>
	<li><strong>Marketing: </strong> Slogan und Geschenke.</li>
</ul>
</div>
</div>
</div>

<div class="col-md-12 mt-4">
<div class="card card-v2">
<div class="card-header">
<h4>Produktverwaltung</h4>
</div>

<div class="card-body">
<ul>
	<li><strong>Artikeltypen: </strong> Individuell mit Bildauswahl z.B. Pizza, Pasta, Sushi und viele mehr.</li>
	<li><strong>Artikel-Subtypen: </strong> Fexibel (z.B. klein, mittel, groß) und extra Zutaten.</li>
	<li><strong>Artikelinformationen: </strong> Artikelname, Beschreibung, Artikelnummer und Bild.</li>
	<li><strong>Preismanagement: </strong> Bedienungspreis, Abholpreis, Lieferpreis, Stammkundenpreis.</li>
	<li><strong>Produktkombinationen: </strong> Mehr verkaufen durch direkte Produktkombination.</li>
	<li><strong>Marketingaktionen: </strong> Happy Hour, Angebot zwischen zwei Daten und weiteren Angeboten.</li>
</ul>
</div>
</div>
</div>

<div class="col-md-12 mt-4">
<div class="card card-v2">
<div class="card-header">
<h4>Außerdem</h4>
</div>

<div class="card-body">
<ul>
	<li><strong>Rollenverwaltung: </strong> Fahrer, Koch, Verwaltung und mehr.</li>
	<li><strong>Sprachauswahl: </strong> Adminseite in Deutsch / Englisch.</li>
	<li><strong>Telefonisches Bestellprogramm: </strong> Einfache schnell Abwicklung (19 Euro/Monat).</li>
	<li><strong>Werbepartnerprogramm: </strong> Werben und profitieren.</li>
	<li><strong>Erreichbarkeit: </strong> Auf Pizza-Click.com oder eigener Domain wie z.B. <a href="http://www.muster-pizza.de">www.muster-pizza.de</a>.</li>
</ul>
</div>
</div>
</div>

            <div class="col-md-12 mt-5">
                <div class="list-box pb-0">
                    <div class="row w-100">
                        <div class="col-md-6">
                            <ul class="list-unstyled">
                                                                    <li>
                                        <span class="counter">1</span>
                                        Deine Shopdaten eingeben
                                    </li>
                                                                    <li>
                                        <span class="counter">2</span>
                                        Produkte eintippen
                                    </li>
                                                                    <li>
                                        <span class="counter">3</span>
                                        Webseite ist automatisch fertig
                                    </li>
                                                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul class="list-unstyled">
                                                                    <li class="success-color font-italic"><i class="check">
                                            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 408.576 408.576" style="enable-background:new 0 0 408.576 408.576;" xml:space="preserve">
<g>
    <g>
        <path d="M204.288,0C91.648,0,0,91.648,0,204.288s91.648,204.288,204.288,204.288s204.288-91.648,204.288-204.288
			S316.928,0,204.288,0z M318.464,150.528l-130.56,129.536c-7.68,7.68-19.968,8.192-28.16,0.512L90.624,217.6
			c-8.192-7.68-8.704-20.48-1.536-28.672c7.68-8.192,20.48-8.704,28.672-1.024l54.784,50.176L289.28,121.344
			c8.192-8.192,20.992-8.192,29.184,0C326.656,129.536,326.656,142.336,318.464,150.528z"></path>
    </g>
</g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                </svg>
                                        </i>
                                        Verkaufen und mehr Bestellungen erhalten
                                    </li>
                                                                    <li class="success-color font-italic"><i class="check">
                                            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 408.576 408.576" style="enable-background:new 0 0 408.576 408.576;" xml:space="preserve">
<g>
    <g>
        <path d="M204.288,0C91.648,0,0,91.648,0,204.288s91.648,204.288,204.288,204.288s204.288-91.648,204.288-204.288
			S316.928,0,204.288,0z M318.464,150.528l-130.56,129.536c-7.68,7.68-19.968,8.192-28.16,0.512L90.624,217.6
			c-8.192-7.68-8.704-20.48-1.536-28.672c7.68-8.192,20.48-8.704,28.672-1.024l54.784,50.176L289.28,121.344
			c8.192-8.192,20.992-8.192,29.184,0C326.656,129.536,326.656,142.336,318.464,150.528z"></path>
    </g>
</g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                </svg>
                                        </i>
                                        Kunden an Restaurant binden
                                    </li>
                                                                    <li class="success-color font-italic"><i class="check">
                                            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 408.576 408.576" style="enable-background:new 0 0 408.576 408.576;" xml:space="preserve">
<g>
    <g>
        <path d="M204.288,0C91.648,0,0,91.648,0,204.288s91.648,204.288,204.288,204.288s204.288-91.648,204.288-204.288
			S316.928,0,204.288,0z M318.464,150.528l-130.56,129.536c-7.68,7.68-19.968,8.192-28.16,0.512L90.624,217.6
			c-8.192-7.68-8.704-20.48-1.536-28.672c7.68-8.192,20.48-8.704,28.672-1.024l54.784,50.176L289.28,121.344
			c8.192-8.192,20.992-8.192,29.184,0C326.656,129.536,326.656,142.336,318.464,150.528z"></path>
    </g>
</g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                </svg>
                                        </i>
                                        Gewinn steigern durch unser flexibles Preismodell
                                    </li>
                                                            </ul>
                        </div>
                    </div>
                </div>
            </div>

<div class="col-md-12 mt-4">
<h3>Schnell Deine eigene individuelle Webseite mit Bestellfunktion automatisch erstellen lassen. Ein Beispiel findest Du unter <a href="http://muster-pizza.de" target="_blank">www.muster-pizza.de</a></h3>
</div>
</div>
</div>', 'created_by_user_id' => '2', 'updated_by_user_id' => '2', 'created_at' => '2020-12-19 05:45:26', 'updated_at' => '2020-12-19 05:45:26', 'deleted_at' => NULL),
            array('id' => '3', 'language_id' => '3', 'content' => '<div class="container">
<div class="mb-5 row text-center">
<div class="col-md-4 m-auto"><img src="/public/images/logos/Pizza-Click.com-logo-1.png" style="width:350px"></div>
</div>

<div class="row">
<div class="col-md-12">
<div class="card-box-1">
<div class="row">
<div class="col-md-6 order-1 order-md-1 px-0">
<div class="card-box-img"><img src="/public/frontend/img/pizza.jpg"></div>
</div>

<div class="col-md-6 order-2 order-md-2">
<div class="card-box-content">
<div class="content">
<p>Du hast ein Restaurant und willst <strong>keine Provision</strong> für Deinen Onlineshop oder Deine Kunden zahlen?</p>

<p>Oder möchtest Du eine geringe Provision oder eine <strong>professionelle</strong> Webseite ohne Onlineshop?</p>

<p>Du bietest einen <strong>Lieferservice</strong>, <strong>Abholung</strong> oder <strong>Bedienung vor Ort</strong> an und möchtest flexibel sein?</p>
</div>
</div>
</div>
</div>
</div>
</div>

<div class="col-md-12 mt-3">
<div class="card-box-1">
<div class="row">
<div class="col-md-6 order-2 order-md-1">
<div class="card-box-content">
<div class="content">
<p>Willst Du Zahlungsarten selbst auswählen oder ausschließen z.B. <strong>bar bezahlen</strong>, <strong>PayPal</strong>oder beides?</p>

<p>Benötigst Du ein <strong>Tischreservierungsprogramm</strong>?</p>

<p>Möchtest Du eine einfache Benutzung, individuelles Design, ein flexibles Preismodell, sowie Zeit und Geld sparen und <strong>zufriedene glücklich Kunden</strong> erhalten?</p>
</div>
</div>
</div>

<div class="col-md-6 order-1 order-md-2 px-0">
<div class="card-box-img"><img src="/public/frontend/img/sushi.jpg"></div>
</div>
</div>
</div>
</div>

<div class="col-md-12 py-5">
<h4>Dann ist Pizza-Click für Dich die richtige Wahl! Bei uns kannst Du alles selbst flexibel auswählen!</h4>
</div>

            <div class="col-md-12">
                <ul class="list-box">
                                            <li><i class="check">
                                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 408.576 408.576" style="enable-background:new 0 0 408.576 408.576;" xml:space="preserve">
<g>
    <g>
        <path d="M204.288,0C91.648,0,0,91.648,0,204.288s91.648,204.288,204.288,204.288s204.288-91.648,204.288-204.288
			S316.928,0,204.288,0z M318.464,150.528l-130.56,129.536c-7.68,7.68-19.968,8.192-28.16,0.512L90.624,217.6
			c-8.192-7.68-8.704-20.48-1.536-28.672c7.68-8.192,20.48-8.704,28.672-1.024l54.784,50.176L289.28,121.344
			c8.192-8.192,20.992-8.192,29.184,0C326.656,129.536,326.656,142.336,318.464,150.528z"></path>
    </g>
</g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                </svg>
                            </i>
                            Dein eigenes Onlineshopsystem
                        </li>
                                            <li><i class="check">
                                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 408.576 408.576" style="enable-background:new 0 0 408.576 408.576;" xml:space="preserve">
<g>
    <g>
        <path d="M204.288,0C91.648,0,0,91.648,0,204.288s91.648,204.288,204.288,204.288s204.288-91.648,204.288-204.288
			S316.928,0,204.288,0z M318.464,150.528l-130.56,129.536c-7.68,7.68-19.968,8.192-28.16,0.512L90.624,217.6
			c-8.192-7.68-8.704-20.48-1.536-28.672c7.68-8.192,20.48-8.704,28.672-1.024l54.784,50.176L289.28,121.344
			c8.192-8.192,20.992-8.192,29.184,0C326.656,129.536,326.656,142.336,318.464,150.528z"></path>
    </g>
</g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                </svg>
                            </i>
                            Dein eigenes modernes Design
                        </li>
                                            <li><i class="check">
                                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 408.576 408.576" style="enable-background:new 0 0 408.576 408.576;" xml:space="preserve">
<g>
    <g>
        <path d="M204.288,0C91.648,0,0,91.648,0,204.288s91.648,204.288,204.288,204.288s204.288-91.648,204.288-204.288
			S316.928,0,204.288,0z M318.464,150.528l-130.56,129.536c-7.68,7.68-19.968,8.192-28.16,0.512L90.624,217.6
			c-8.192-7.68-8.704-20.48-1.536-28.672c7.68-8.192,20.48-8.704,28.672-1.024l54.784,50.176L289.28,121.344
			c8.192-8.192,20.992-8.192,29.184,0C326.656,129.536,326.656,142.336,318.464,150.528z"></path>
    </g>
</g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                </svg>
                            </i>
                            mit oder ohne PayPal
                        </li>
                                            <li><i class="check">
                                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 408.576 408.576" style="enable-background:new 0 0 408.576 408.576;" xml:space="preserve">
<g>
    <g>
        <path d="M204.288,0C91.648,0,0,91.648,0,204.288s91.648,204.288,204.288,204.288s204.288-91.648,204.288-204.288
			S316.928,0,204.288,0z M318.464,150.528l-130.56,129.536c-7.68,7.68-19.968,8.192-28.16,0.512L90.624,217.6
			c-8.192-7.68-8.704-20.48-1.536-28.672c7.68-8.192,20.48-8.704,28.672-1.024l54.784,50.176L289.28,121.344
			c8.192-8.192,20.992-8.192,29.184,0C326.656,129.536,326.656,142.336,318.464,150.528z"></path>
    </g>
</g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                </svg>
                            </i>
                            Deine Sichtbarkeit steigern
                        </li>
                                            <li><i class="check">
                                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 408.576 408.576" style="enable-background:new 0 0 408.576 408.576;" xml:space="preserve">
<g>
    <g>
        <path d="M204.288,0C91.648,0,0,91.648,0,204.288s91.648,204.288,204.288,204.288s204.288-91.648,204.288-204.288
			S316.928,0,204.288,0z M318.464,150.528l-130.56,129.536c-7.68,7.68-19.968,8.192-28.16,0.512L90.624,217.6
			c-8.192-7.68-8.704-20.48-1.536-28.672c7.68-8.192,20.48-8.704,28.672-1.024l54.784,50.176L289.28,121.344
			c8.192-8.192,20.992-8.192,29.184,0C326.656,129.536,326.656,142.336,318.464,150.528z"></path>
    </g>
</g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                </svg>
                            </i>
                            mehr neue Kunden erhalten
                        </li>
                                            <li><i class="check">
                                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 408.576 408.576" style="enable-background:new 0 0 408.576 408.576;" xml:space="preserve">
<g>
    <g>
        <path d="M204.288,0C91.648,0,0,91.648,0,204.288s91.648,204.288,204.288,204.288s204.288-91.648,204.288-204.288
			S316.928,0,204.288,0z M318.464,150.528l-130.56,129.536c-7.68,7.68-19.968,8.192-28.16,0.512L90.624,217.6
			c-8.192-7.68-8.704-20.48-1.536-28.672c7.68-8.192,20.48-8.704,28.672-1.024l54.784,50.176L289.28,121.344
			c8.192-8.192,20.992-8.192,29.184,0C326.656,129.536,326.656,142.336,318.464,150.528z"></path>
    </g>
</g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                </svg>
                            </i>
                            Werbepartner werden und profitieren
                        </li>
                                            <li><i class="check">
                                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 408.576 408.576" style="enable-background:new 0 0 408.576 408.576;" xml:space="preserve">
<g>
    <g>
        <path d="M204.288,0C91.648,0,0,91.648,0,204.288s91.648,204.288,204.288,204.288s204.288-91.648,204.288-204.288
			S316.928,0,204.288,0z M318.464,150.528l-130.56,129.536c-7.68,7.68-19.968,8.192-28.16,0.512L90.624,217.6
			c-8.192-7.68-8.704-20.48-1.536-28.672c7.68-8.192,20.48-8.704,28.672-1.024l54.784,50.176L289.28,121.344
			c8.192-8.192,20.992-8.192,29.184,0C326.656,129.536,326.656,142.336,318.464,150.528z"></path>
    </g>
</g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                </svg>
                            </i>
                            Zeit gewinnen
                        </li>
                                            <li><i class="check">
                                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 408.576 408.576" style="enable-background:new 0 0 408.576 408.576;" xml:space="preserve">
<g>
    <g>
        <path d="M204.288,0C91.648,0,0,91.648,0,204.288s91.648,204.288,204.288,204.288s204.288-91.648,204.288-204.288
			S316.928,0,204.288,0z M318.464,150.528l-130.56,129.536c-7.68,7.68-19.968,8.192-28.16,0.512L90.624,217.6
			c-8.192-7.68-8.704-20.48-1.536-28.672c7.68-8.192,20.48-8.704,28.672-1.024l54.784,50.176L289.28,121.344
			c8.192-8.192,20.992-8.192,29.184,0C326.656,129.536,326.656,142.336,318.464,150.528z"></path>
    </g>
</g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                </svg>
                            </i>
                            flexibel mit oder ohne Provision
                        </li>
                                            <li><i class="check">
                                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 408.576 408.576" style="enable-background:new 0 0 408.576 408.576;" xml:space="preserve">
<g>
    <g>
        <path d="M204.288,0C91.648,0,0,91.648,0,204.288s91.648,204.288,204.288,204.288s204.288-91.648,204.288-204.288
			S316.928,0,204.288,0z M318.464,150.528l-130.56,129.536c-7.68,7.68-19.968,8.192-28.16,0.512L90.624,217.6
			c-8.192-7.68-8.704-20.48-1.536-28.672c7.68-8.192,20.48-8.704,28.672-1.024l54.784,50.176L289.28,121.344
			c8.192-8.192,20.992-8.192,29.184,0C326.656,129.536,326.656,142.336,318.464,150.528z"></path>
    </g>
</g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                </svg>
                            </i>
                            mehr Bestellungen gewinnen
                        </li>
                                            <li><i class="check">
                                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 408.576 408.576" style="enable-background:new 0 0 408.576 408.576;" xml:space="preserve">
<g>
    <g>
        <path d="M204.288,0C91.648,0,0,91.648,0,204.288s91.648,204.288,204.288,204.288s204.288-91.648,204.288-204.288
			S316.928,0,204.288,0z M318.464,150.528l-130.56,129.536c-7.68,7.68-19.968,8.192-28.16,0.512L90.624,217.6
			c-8.192-7.68-8.704-20.48-1.536-28.672c7.68-8.192,20.48-8.704,28.672-1.024l54.784,50.176L289.28,121.344
			c8.192-8.192,20.992-8.192,29.184,0C326.656,129.536,326.656,142.336,318.464,150.528z"></path>
    </g>
</g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                </svg>
                            </i>
                            Adminseite mit Nutzerverwaltung
                        </li>
                                            <li><i class="check">
                                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 408.576 408.576" style="enable-background:new 0 0 408.576 408.576;" xml:space="preserve">
<g>
    <g>
        <path d="M204.288,0C91.648,0,0,91.648,0,204.288s91.648,204.288,204.288,204.288s204.288-91.648,204.288-204.288
			S316.928,0,204.288,0z M318.464,150.528l-130.56,129.536c-7.68,7.68-19.968,8.192-28.16,0.512L90.624,217.6
			c-8.192-7.68-8.704-20.48-1.536-28.672c7.68-8.192,20.48-8.704,28.672-1.024l54.784,50.176L289.28,121.344
			c8.192-8.192,20.992-8.192,29.184,0C326.656,129.536,326.656,142.336,318.464,150.528z"></path>
    </g>
</g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                </svg>
                            </i>
                            Happy Hour &amp; Tischreservierung
                        </li>
                                            <li><i class="check">
                                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 408.576 408.576" style="enable-background:new 0 0 408.576 408.576;" xml:space="preserve">
<g>
    <g>
        <path d="M204.288,0C91.648,0,0,91.648,0,204.288s91.648,204.288,204.288,204.288s204.288-91.648,204.288-204.288
			S316.928,0,204.288,0z M318.464,150.528l-130.56,129.536c-7.68,7.68-19.968,8.192-28.16,0.512L90.624,217.6
			c-8.192-7.68-8.704-20.48-1.536-28.672c7.68-8.192,20.48-8.704,28.672-1.024l54.784,50.176L289.28,121.344
			c8.192-8.192,20.992-8.192,29.184,0C326.656,129.536,326.656,142.336,318.464,150.528z"></path>
    </g>
</g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                </svg>
                            </i>
                            zeitlich limitierte Angebote
                        </li>
                                            <li><i class="check">
                                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 408.576 408.576" style="enable-background:new 0 0 408.576 408.576;" xml:space="preserve">
<g>
    <g>
        <path d="M204.288,0C91.648,0,0,91.648,0,204.288s91.648,204.288,204.288,204.288s204.288-91.648,204.288-204.288
			S316.928,0,204.288,0z M318.464,150.528l-130.56,129.536c-7.68,7.68-19.968,8.192-28.16,0.512L90.624,217.6
			c-8.192-7.68-8.704-20.48-1.536-28.672c7.68-8.192,20.48-8.704,28.672-1.024l54.784,50.176L289.28,121.344
			c8.192-8.192,20.992-8.192,29.184,0C326.656,129.536,326.656,142.336,318.464,150.528z"></path>
    </g>
</g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                </svg>
                            </i>
                            mit oder ohne Lieferservice
                        </li>
                                            <li><i class="check">
                                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 408.576 408.576" style="enable-background:new 0 0 408.576 408.576;" xml:space="preserve">
<g>
    <g>
        <path d="M204.288,0C91.648,0,0,91.648,0,204.288s91.648,204.288,204.288,204.288s204.288-91.648,204.288-204.288
			S316.928,0,204.288,0z M318.464,150.528l-130.56,129.536c-7.68,7.68-19.968,8.192-28.16,0.512L90.624,217.6
			c-8.192-7.68-8.704-20.48-1.536-28.672c7.68-8.192,20.48-8.704,28.672-1.024l54.784,50.176L289.28,121.344
			c8.192-8.192,20.992-8.192,29.184,0C326.656,129.536,326.656,142.336,318.464,150.528z"></path>
    </g>
</g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                </svg>
                            </i>
                            Verkäufe mit Produktkombinationen
                        </li>
                                    </ul>
            </div>

<div class="col-md-12 mt-5">
<h3 class="text-center">Jetzt kostenlos registrieren auf www.pizza-click.com<br>Shop mit allen Gerichten erstellen und direkt online verkaufen!</h3>
</div>

            <div class="col-md-12 mt-4">
                <h3 class="text-center font-weight-bold m-0 px-5 py-4">
                    aktuelles Angebot: Jetzt für <span class="text-red">0 €</span> einmalige Einrichtungsgebühr statt <span class="text-red">199 €</span>
                </h3>
            </div>

<div class="col-md-12 mt-4">
<div class="card card-v2">
<div class="card-header">
<h4>Shopverwaltung</h4>
</div>

<div class="card-body">
<ul>
	<li><strong>Zweck: </strong> Premium Onlineshop (49 Euro/Monat oder 10% Provision) oder professionelle Webseite (29 Euro/Monat).</li>
	<li><strong>Lieferservice: </strong> Mit oder ohne Lieferservice, Abholung und/oder Bedienung vor Ort.</li>
	<li><strong>Bezahlmodell: </strong> Onlineshop mit oder ohne Provision.</li>
	<li><strong>Allgemeine Daten: </strong> Shopname, Adresse, Telefonnummer, Shopsprache, Öffnungszeiten, Lieferzeiten und Sonderöffnungszeiten.</li>
	<li><strong>Social Media: </strong> Facebook, Instagram, YouTube, Twitter, Whatsapp und Telegram Links.</li>
	<li><strong>Benachrichtigungsmethode: </strong> Fax, E-Mail oder beide.</li>
	<li><strong>Tischreservierung: </strong> Mit oder ohne Tischreserveierungsprogramm (19 Euro/Monat).</li>
	<li><strong>Kundenzahlungsarte: </strong> Bar bezahlen und/oder PayPal.</li>
	<li><strong>Design: </strong> Bilderauswahl für Slider, Parallax, Hintergrund und Farbauswahl.</li>
	<li><strong>Liefergebiete: </strong> Postleitzahlenauswahl mit Mindestbestellwerten, Lieferkostenauswahl.</li>
	<li><strong>Marketing: </strong> Slogan und Geschenke.</li>
</ul>
</div>
</div>
</div>

<div class="col-md-12 mt-4">
<div class="card card-v2">
<div class="card-header">
<h4>Produktverwaltung</h4>
</div>

<div class="card-body">
<ul>
	<li><strong>Artikeltypen: </strong> Individuell mit Bildauswahl z.B. Pizza, Pasta, Sushi und viele mehr.</li>
	<li><strong>Artikel-Subtypen: </strong> Fexibel (z.B. klein, mittel, groß) und extra Zutaten.</li>
	<li><strong>Artikelinformationen: </strong> Artikelname, Beschreibung, Artikelnummer und Bild.</li>
	<li><strong>Preismanagement: </strong> Bedienungspreis, Abholpreis, Lieferpreis, Stammkundenpreis.</li>
	<li><strong>Produktkombinationen: </strong> Mehr verkaufen durch direkte Produktkombination.</li>
	<li><strong>Marketingaktionen: </strong> Happy Hour, Angebot zwischen zwei Daten und weiteren Angeboten.</li>
</ul>
</div>
</div>
</div>

<div class="col-md-12 mt-4">
<div class="card card-v2">
<div class="card-header">
<h4>Außerdem</h4>
</div>

<div class="card-body">
<ul>
	<li><strong>Rollenverwaltung: </strong> Fahrer, Koch, Verwaltung und mehr.</li>
	<li><strong>Sprachauswahl: </strong> Adminseite in Deutsch / Englisch.</li>
	<li><strong>Telefonisches Bestellprogramm: </strong> Einfache schnell Abwicklung (19 Euro/Monat).</li>
	<li><strong>Werbepartnerprogramm: </strong> Werben und profitieren.</li>
	<li><strong>Erreichbarkeit: </strong> Auf Pizza-Click.com oder eigener Domain wie z.B. <a href="http://www.muster-pizza.de">www.muster-pizza.de</a>.</li>
</ul>
</div>
</div>
</div>

            <div class="col-md-12 mt-5">
                <div class="list-box pb-0">
                    <div class="row w-100">
                        <div class="col-md-6">
                            <ul class="list-unstyled">
                                                                    <li>
                                        <span class="counter">1</span>
                                        Deine Shopdaten eingeben
                                    </li>
                                                                    <li>
                                        <span class="counter">2</span>
                                        Produkte eintippen
                                    </li>
                                                                    <li>
                                        <span class="counter">3</span>
                                        Webseite ist automatisch fertig
                                    </li>
                                                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul class="list-unstyled">
                                                                    <li class="success-color font-italic"><i class="check">
                                            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 408.576 408.576" style="enable-background:new 0 0 408.576 408.576;" xml:space="preserve">
<g>
    <g>
        <path d="M204.288,0C91.648,0,0,91.648,0,204.288s91.648,204.288,204.288,204.288s204.288-91.648,204.288-204.288
			S316.928,0,204.288,0z M318.464,150.528l-130.56,129.536c-7.68,7.68-19.968,8.192-28.16,0.512L90.624,217.6
			c-8.192-7.68-8.704-20.48-1.536-28.672c7.68-8.192,20.48-8.704,28.672-1.024l54.784,50.176L289.28,121.344
			c8.192-8.192,20.992-8.192,29.184,0C326.656,129.536,326.656,142.336,318.464,150.528z"></path>
    </g>
</g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                </svg>
                                        </i>
                                        Verkaufen und mehr Bestellungen erhalten
                                    </li>
                                                                    <li class="success-color font-italic"><i class="check">
                                            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 408.576 408.576" style="enable-background:new 0 0 408.576 408.576;" xml:space="preserve">
<g>
    <g>
        <path d="M204.288,0C91.648,0,0,91.648,0,204.288s91.648,204.288,204.288,204.288s204.288-91.648,204.288-204.288
			S316.928,0,204.288,0z M318.464,150.528l-130.56,129.536c-7.68,7.68-19.968,8.192-28.16,0.512L90.624,217.6
			c-8.192-7.68-8.704-20.48-1.536-28.672c7.68-8.192,20.48-8.704,28.672-1.024l54.784,50.176L289.28,121.344
			c8.192-8.192,20.992-8.192,29.184,0C326.656,129.536,326.656,142.336,318.464,150.528z"></path>
    </g>
</g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                </svg>
                                        </i>
                                        Kunden an Restaurant binden
                                    </li>
                                                                    <li class="success-color font-italic"><i class="check">
                                            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 408.576 408.576" style="enable-background:new 0 0 408.576 408.576;" xml:space="preserve">
<g>
    <g>
        <path d="M204.288,0C91.648,0,0,91.648,0,204.288s91.648,204.288,204.288,204.288s204.288-91.648,204.288-204.288
			S316.928,0,204.288,0z M318.464,150.528l-130.56,129.536c-7.68,7.68-19.968,8.192-28.16,0.512L90.624,217.6
			c-8.192-7.68-8.704-20.48-1.536-28.672c7.68-8.192,20.48-8.704,28.672-1.024l54.784,50.176L289.28,121.344
			c8.192-8.192,20.992-8.192,29.184,0C326.656,129.536,326.656,142.336,318.464,150.528z"></path>
    </g>
</g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                </svg>
                                        </i>
                                        Gewinn steigern durch unser flexibles Preismodell
                                    </li>
                                                            </ul>
                        </div>
                    </div>
                </div>
            </div>

<div class="col-md-12 mt-4">
<h3>Schnell Deine eigene individuelle Webseite mit Bestellfunktion automatisch erstellen lassen. Ein Beispiel findest Du unter <a href="http://muster-pizza.de" target="_blank">www.muster-pizza.de</a></h3>
</div>
</div>
</div>', 'created_by_user_id' => '2', 'updated_by_user_id' => '2', 'created_at' => '2020-12-19 05:45:26', 'updated_at' => '2020-12-19 05:45:26', 'deleted_at' => NULL)
        );

        return $registration_pages;
    }
}

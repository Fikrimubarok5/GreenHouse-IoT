@extends('layouts.app')

@section('content')
<script src="https://cdnjs.cloudflare.com/ajax/libs/paho-mqtt/1.0.3/mqttws31.min.js"></script>
    <script type="text/javascript">
        var client;

        function connect() {
            client = new Paho.MQTT.Client("x119914d.ala.asia-southeast1.emqxsl.com", 8883, "clientId");
            client.onConnectionLost = onConnectionLost;
            client.onMessageArrived = onMessageArrived;

            var options = {
                onSuccess: onConnect,
            };

            client.connect(options);
        }

        function onConnect() {
            console.log("Connected to broker");
            // Optional: subscribe to a topic if needed
            // client.subscribe("home/led");
        }

        function onConnectionLost(responseObject) {
            if (responseObject.errorCode !== 0) {
                console.log("onConnectionLost:" + responseObject.errorMessage);
            }
        }

        function onMessageArrived(message) {
            console.log("onMessageArrived:" + message.payloadString);
        }

        function sendMessage(message) {
            var mqttMessage = new Paho.MQTT.Message(message);
            mqttMessage.destinationName = "GreenHouse/Led";
            client.send(mqttMessage);
        }

        function toggleSwitch(event) {
            if (event.target.checked) {
                sendMessage("ON");
            } else {
                sendMessage("OFF");
            }
        }

        document.addEventListener('DOMContentLoaded', function () {
            connect();
            var switchElement = document.getElementById('flexSwitchCheckDefault1');
            switchElement.addEventListener('change', toggleSwitch);
        });
    </script>
<div class="body-wrapper-inner">
    <div class="container-fluid">
        {{-- <!-- <div class="mb-3 row">
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Tambah Data</button>
        </div> --> --}}
        <div class="row">
            <div class="d-flex justify-content-between">
                <div class="card w-50 me-2">
                    <div class="card-body">
                        <div class="d-sm-flex d-block align-items-center justify-content-between mb-9">
                            <div class="mb-3 mb-sm-0">
                                {{-- <h1 class="card-title fw-semibold">Button</h1> --}}
                            </div>
                        </div>
                        <div class="switch-container d-flex">
                            <div class="form-check form-switch" style="margin-left: 20px; flex: 1;">
                                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault1">
                                <label class="form-check-label" for="flexSwitchCheckDefault1" id="switchLabel1">Water Pump</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card w-50 ms-2">
                    <div class="card-body">
                        <div class="d-sm-flex d-block align-items-center justify-content-between mb-9">
                            <div class="mb-3 mb-sm-0">
                                {{-- <h1 class="card-title fw-semibold">Saklar</h1> --}}
                            </div>
                        </div>
                        <div class="switch-container d-flex">
                            <div class="form-check form-switch" style="margin-left: 20px; flex: 1;">
                                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault2">
                                <label class="form-check-label" for="flexSwitchCheckDefault2" id="switchLabel2">Lamp Indicator</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="px-6 py-6 text-center">
        <p class="mb-0 fs-4">Developed by <a href="https://www.instagram.com/fikrimubarok05/" target="_blank"
            class="pe-1 text-primary text-decoration-underline">@fikrimubarok05</a> 2024</p>
    </div>
</div>
@endsection

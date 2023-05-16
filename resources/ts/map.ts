// Initialize and add the map
function initMap(): void {
    const directionsRenderer = new google.maps.DirectionsRenderer();
    const directionsService = new google.maps.DirectionsService();

    // directionsRenderer.setMap(map);
    calculateAndDisplayRoute(directionsService, directionsRenderer);
    (document.getElementById("mode") as HTMLInputElement).addEventListener(
        "change",() => {
        calculateAndDisplayRoute(directionsService, directionsRenderer);
        }
    );
}

function calculateAndDisplayRoute(
    directionsService: google.maps.DirectionsService,
    _directionsRenderer: google.maps.DirectionsRenderer
) {
    // 出発地点
    // const origin = { lat: 35.6895, lng: 139.69171 };
    const origin = "2-1-33 Sakurajima Konohana-ku Universal Studios Japan";
    // 目的地
    // const destination = { lat: 35.655164, lng: 139.74477 };
    const destination = "Ofukacho Kita-ku Grand Front Osaka";
    // ウェイポイント（経由地）
    const waypoints = [
        // { location: { lat: 35.685, lng: 139.752 } },
        // { location: { lat: 35.672, lng: 139.769 } }
        { location: "1-1-43 Abenosuji Abeno-ku" },
        { location: "Osaka Aquarium" }
    ];
    const map = new google.maps.Map(document.getElementById("map") as HTMLElement,
    {
        zoom: 14,
        center: { lat: 37.77, lng: -122.447 },
        disableDefaultUI: true,
    }
);

// ルート検索のリクエストを送信
    directionsService.route({
    origin: origin,
    destination: destination,
    waypoints: waypoints,
    travelMode: google.maps.TravelMode.DRIVING,
    }, function(response, status) {
        if (status === google.maps.DirectionsStatus.OK) {
            // ルートを描画する
            const directionsRenderer = new google.maps.DirectionsRenderer();
            directionsRenderer.setDirections(response);
            directionsRenderer.setMap(map);
        } else {
            window.alert('Directions request failed due to ' + status);
        }
    })
};

declare global {
    interface Window {
        initMap: () => void;
    }
}
window.initMap = initMap;
export { };
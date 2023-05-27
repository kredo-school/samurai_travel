declare const gm_plan: string[];
let origin: google.maps.LatLng | undefined;
let destination: google.maps.LatLng | undefined;
let waypoints: google.maps.DirectionsWaypoint[] = [];

// Initialize and add the map
function initMap(): void {
    const directionsRenderer = new google.maps.DirectionsRenderer();
    const directionsService = new google.maps.DirectionsService();
    calculateAndDisplayRoute(directionsService, directionsRenderer);
}

function calculateAndDisplayRoute(
    directionsService: google.maps.DirectionsService,
    _directionsRenderer: google.maps.DirectionsRenderer
) {
    const promises = gm_plan.map((gm_plan) => getLatLngFromAddress(gm_plan));
    Promise.all(promises)
    .then((locations) => {
        locations.forEach((location, index) => {
            if (location) {
                const latitude = location.lat();
                const longitude = location.lng();
            }
        });

        const center = locations[0] !== null ? locations[0] : undefined;
        // const map = new google.maps.Map(document.getElementById("map") as HTMLElement,
        const map = new google.maps.Map(document.querySelector(`[id^='map_']`) as HTMLElement,
            {
                zoom: 14,
                center: center,
                disableDefaultUI: true,
            }
        );

        for (let index = 0; index < locations.length; index++) {
            if (index === 0) {
                origin = locations[index] as google.maps.LatLng | undefined;
            } else if (index === locations.length - 1) {
                destination = locations[index] as google.maps.LatLng | undefined;
            } else {
                const waypoint: google.maps.DirectionsWaypoint = {
                    location: new google.maps.LatLng(locations[index]?.lat()!, locations[index]?.lng()!),
                    stopover: true,
                };
                waypoints.push(waypoint);
            }
        }

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
    })
    .catch((error) => {
        console.error(error);
    });
};

// 住所→緯度経度に変換
function getLatLngFromAddress(address: string): Promise<google.maps.LatLng | null> {
    return new Promise((resolve, reject) => {
        const geocoder = new google.maps.Geocoder();
        geocoder.geocode({ address: address }, (results, status) => {
        if (status === google.maps.GeocoderStatus.OK && results.length > 0) {
            const location = results[0].geometry.location;
            resolve(location);
        } else {
            reject(new Error("Geocodeが失敗しました。ステータス: " + status));
        }
        });
    });
}

declare global {
    interface Window {
        initMap: () => void;
    }
}
window.initMap = initMap;
export { };
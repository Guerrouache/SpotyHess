
// let images1 = ["https://i.scdn.co/image/ab67616d0000b27357c87959e63d634cd5128e36", 
// "https://i.scdn.co/image/ab67616d0000b273d058cd84602ed47f4f0a391b", 
// ];
// let index1 = 0;

// function changerImages() {
//   let img = document.getElementById("image1");
//   if (index1 < images1.length - 1) {
//     index1++;
//   } else {
//     index1 = 0;
//   }
//   img.src = images1[index1];
// }

let imagesSet1 = ["https://i.scdn.co/image/ab67616d0000b27357c87959e63d634cd5128e36", 
"https://i.scdn.co/image/ab67616d0000b2733c505b5ddcbdf80c7dff5a1f",
 "https://i.scdn.co/image/ab67616d0000b2736558afda5c28b5df010d1db3",
  "https://i.scdn.co/image/ab67616d0000b27397340a7fb13c8f6fa15c1356"];
  
let imagesSet2 = ["https://i.scdn.co/image/ab67616d0000b273d058cd84602ed47f4f0a391b",
 "https://www.abcdrduson.com/wp-content/uploads/2022/02/Jul_Independance.jpg",
  "https://static.fnac-static.com/multimedia/Images/FR/NR/57/c8/cf/13617239/1507-1/tsp20210622142126/Enfant2LaRue-Volume-2.jpg",
   "https://www.goutemesdisques.com/uploads/tx_gmdchron/pi1/ADC.jpg"];
   let currentSet = 1;

   function changerImages() {
     let currentImages = currentSet === 1 ? imagesSet1 : imagesSet2;
     let nextImages = currentSet === 1 ? imagesSet2 : imagesSet1;
 
     for (let i = 0; i < currentImages.length; i++) {
       document.getElementById(`image${i + 1}`).src = nextImages[i];
     }
 
     currentSet = currentSet === 1 ? 2 : 1;
   }


const consultLinks = {
  0: "https://www.justdial.com/Ernakulam/Pnvm-Cosmo-Derma-Centre-Near-Pnvm-Hospital-Banerji-Road/0484PX484-X484-120622155846-U3L6_BZDET?ncatid=10156786&area=&search=Best%20Dermatologists%20in%20Ernakulam%20-%20Book%20Appointment%20Online&mncatname=Dermatologists&abd_btn=Send%20Enquiry&abd_heading=Dermatologists&isOpenAbd=1&bd=1&",
  1: "https://www.justdial.com/Ernakulam/Cutis-International-Dermatology-and-Cosmetic-Clinic-Above-Union-Bank-Kakkanad/0484PX484-X484-160107131249-M5E6_BZDET?ncatid=10156786&area=&search=Best%20Dermatologists%20in%20Ernakulam%20-%20Book%20Appointment%20Online&mncatname=Dermatologists&abd_btn=Send%20Enquiry&abd_heading=Dermatologists&isOpenAbd=1&bd=1&",
  2: "https://www.justdial.com/Ernakulam/Dr-V-P-Kuriyipe-Ernakulam-Ho/0484PX484-X484-140401122755-X5M2_BZDET?ncatid=10156786&area=&search=Best%20Dermatologists%20in%20Ernakulam%20-%20Book%20Appointment%20Online&mncatname=Dermatologists&abd_btn=Send%20Enquiry&abd_heading=Dermatologists&isOpenAbd=1&bd=1&",
  3: "https://www.justdial.com/Ernakulam/Xenofolix-Hair-Transplantation-and-Skin-Experts-Near-Aluva-Market-Aluva/0484PX484-X484-240328130702-K6M8_BZDET?ncatid=10156786&area=&search=Best%20Dermatologists%20in%20Ernakulam%20-%20Book%20Appointment%20Online&mncatname=Dermatologists&abd_btn=Send%20Enquiry&abd_heading=Dermatologists&isOpenAbd=1&bd=1&",
  4: "https://www.justdial.com/Ernakulam/Glowyoung-Skin-Clinic-Kochi/0484PX484-X484-230420070635-J8Y7_BZDET?ncatid=10156786&area=&search=Best%20Dermatologists%20in%20Ernakulam%20-%20Book%20Appointment%20Online&mncatname=Dermatologists&abd_btn=Send%20Enquiry&abd_heading=Dermatologists&isOpenAbd=1&bd=1&",
  5: "https://www.justdial.com/Ernakulam/Skin-Secrets-Opposite-to-Modern-Bread-Edapally/0484PX484-X484-171114133451-S9S4_BZDET?ncatid=10156786&area=&search=Best%20Dermatologists%20in%20Ernakulam%20-%20Book%20Appointment%20Online&mncatname=Dermatologists&abd_btn=Send%20Enquiry&abd_heading=Dermatologists&isOpenAbd=1&bd=1&",
  6: "https://www.justdial.com/Ernakulam/Insight-Derma-Clinic-Near-More-Supermarket-Panampilly-Nagar/0484PX484-X484-210114114451-Y8E3_BZDET?ncatid=10156786&area=&search=Best%20Dermatologists%20in%20Ernakulam%20-%20Book%20Appointment%20Online&mncatname=Dermatologists&abd_btn=Send%20Enquiry&abd_heading=Dermatologists&isOpenAbd=1&bd=1&",
};

const keys = Object.keys(consultLinks);
const randomIndex = Math.floor(Math.random() * keys.length);
const randomKey = keys[randomIndex];
const randomPropertyValue = consultLinks[randomKey];

const allNigerianStates = [
    "Abia",
    "Adamawa",
    "Akwa Ibom",
    "Anambra",
    "Bauchi",
    "Bayelsa",
    "Benue",
    "Borno",
    "Cross River",
    "Delta",
    "Ebonyi",
    "Enugu",
    "Edo",
    "Ekiti",
    "Gombe",
    "Imo",
    "Jigawa",
    "Kaduna",
    "Kano",
    "Katsina",
    "Kebbi",
    "Kogi",
    "Kwara",
    "Lagos",
    "Nasarawa",
    "Niger",
    "Ogun",
    "Ondo",
    "Osun",
    "Oyo",
    "Plateau",
    "Rivers",
    "Sokoto",
    "Taraba",
    "Yobe",
    "Zamfara"
];

const allLGAs = {
    'Abia': ["Aba North LGA", " Aba South LGA", " Arochukwu LGA", " Bende LGA", " Ikwuano LGA", " Isiala Ngwa North LGA", " Isiala Ngwa South LGA", " Isuikwuato LGA", " Obi Ngwa LGA", " Ohafia LGA", " Osisioma Ngwa LGA", " Ugwunagbo LGA", " Ukwa East LGA", " Ukwa West LGA", " Umuahia North LGA", " Umuahia South LGA", " Umu Nneochi LGA"],
    'Adamawa': ["Demsa LGA", " Fufore LGA", " Ganye LGA", " Girei LGA", " Gombi LGA", " Guyuk LGA", " Hong LGA", " Jada LGA", " Lamurde LGA", " Madagali LGA", " Maiha LGA", " Mayo-Belwa LGA", " Michika LGA", " Mubi North LGA", " Mubi South LGA", " Numan LGA", " Shelleng LGA", " Song LGA", " Toungo LGA", " Yola North LGA", " Yola South LGA"],
    'Akwa Ibom': ["Abak LGA", " Eastern Obolo LGA", " Eket LGA", " Esit-Eket LGA", " Essien Udim LGA", " Etim-Ekpo LGA", " Etinan LGA", " Ibeno LGA", " Ibesikpo-Asutan LGA", " Ibiono-Ibom LGA", " Ika LGA", " Ikono LGA", " Ikot Abasi LGA", " Ikot Ekpene LGA", " Ini LGA", " Itu LGA", " Mbo LGA", " Mkpat-Enin LGA", " Nsit-Atai LGA", " Nsit-Ibom LGA", " Nsit-Ubium LGA", " Obot-Akara LGA", " Okobo LGA", " Onna LGA", " Oron LGA", " Oruk Anam LGA", " Ukanafun LGA", " Udung-Uko LGA", " Uruan LGA", " Urue-Offong/Oruko LGA", " Uyo LGA"],
    "Anambra": ["Aguata LGA", " Awka North LGA", " Awka South LGA", " Anambra East LGA", " Anambra West LGA", " Anaocha LGA", " Ayamelum LGA", " Dunukofia LGA", " Ekwusigo LGA", " Idemili North LGA", " Idemili South LGA", " Ihiala LGA", " Njikoka LGA", " Nnewi North LGA", " Nnewi South LGA", " Ogbaru LGA", " Onitsha North LGA", " Onitsha South LGA", " Orumba North LGA", " Orumba South LGA", " Oyi LGA"],
    "Bauchi": ["Bauchi LGA", " Tafawa Balewa LGA", " Dass LGA", " Toro LGA", " Bogoro LGA", " Ningi LGA", " Warji LGA", " Ganjuwa LGA", " Kirfi LGA", " Alkaleri LGA", " Darazo LGA", " Misau LGA", " Giade LGA", " Shira LGA", " Jama'are LGA", " Katagum LGA", " Itas/Gadau LGA", " Zaki LGA", " Gamawa LGA", " Damban LGA"],
    "Bayelsa": ["Brass LGA", " Ekeremor LGA", " Kolokuma/Opokuma LGA", " Nembe LGA", " Ogbia LGA", " Sagbama LGA", " Southern Ijaw LGA", " Yenagoa LGA."],
    "Benue": ["Ado LGA", " Agatu LGA", " Apa LGA", " Buruku LGA", " Gboko LGA", " Guma LGA", " Gwer East LGA", " Gwer West LGA", " Katsina-Ala LGA", " Konshisha LGA", " Kwande LGA", " Logo LGA", " Makurdi LGA", " Obi LGA", " Ogbadibo LGA", " Ohimini LGA", " Oju LGA", " Okpokwu LGA", " Otukpo LGA", " Tarka LGA", " Ukum LGA", " Ushongo LGA", " Vandeikya LGA"],
    "Borno": ["Abadan LGA", " Askira/Uba LGA", " Bama LGA", " Bayo LGA", " Biu LGA", " Chibok LGA", " Damboa LGA", " Dikwagubio LGA", " Guzamala LGA", " Gwoza LGA", " Hawul LGA", " Jere LGA", " Kaga LGA", " Kalka/Balge LGA", " Konduga LGA", " Kukawa LGA", " Kwaya-ku LGA", " Mafa LGA", " Magumeri LGA", " Maiduguri LGA", " Marte LGA", " Mobbar LGA", " Monguno LGA", " Ngala LGA", " Nganzai LGA", " Shani LGA"],
    "Cross River": ["Abi LGA", " Akamkpa LGA", " Akpabuyo LGA", " Bakassi LGA", " Bekwarra LGA", " Biase LGA", " Boki LGA", " Calabar Municipal", " Calabar South LGA", " Etung LGA", " Ikom LGA", " Obanliku LGA", " Obubra LGA", " Obudu LGA", " Odukpani LGA", " Ogoja LGA", " Yakuur LGA", " Yala LGA"],
    "Delta": ["Aniocha south LGA", " Anioha LGA", " Bomadi LGA", " Burutu LGA", " Ethiope west LGA", " Ethiope east LGA", " Ika south LGA", " Ika north east LGA", " Isoko south LGA", " Isoko north LGA", " Ndokwa east LGA", " Ndokwa west LGA", " Okpe LGA", " Oshimili north LGA", " Oshimili south LGA", " Patani LGA", " Sapele LGA", " Udu LGA", " Ughelli south LGA", " Ughelli north LGA", " Ukwuani LGA", " Uviwie LGA", " Warri central LGA", " Warri north LGA", " Warri south LGA"],
    "Ebonyi": ["Abakaliki LGA", " Afikpo North LGA", " Afikpo South (Edda) LGA", " Ebonyi LGA", " Ezza North LGA", " Ezza South LGA", " Ikwo LGA", " Ishielu LGA", " Ivo LGA", " Izzi LGA", " Ohaozara LGA", " Ohaukwu LGA", " Onicha LGA"],
    "Enugu": ["Aninri LGA", " Awgu LGA", " Enugu East LGA", " Enugu North LGA", " Enugu South LGA", " Ezeagu LGA", " Igbo Etiti LGA", " Igbo Eze North LGA", " Igbo Eze South LGA", " Isi Uzo LGA", " Nkanu East LGA", " Nkanu West LGA", " Nsukka LGA", " Oji River LGA", " Udenu LGA", " Udi LGA", " Uzo-Uwani LGA"],
    "Edo": ["Akoko-Edo LGA", " Egor LGA", " Esan Central LGA", " Esan North-East LGA", " Esan South-East LGA", " Esan West LGA", " Etsako Central LGA", " Etsako East LGA", " Etsako West LGA", " Igueben LGA", " Ikpoba-Okha LGA", " Oredo LGA", " Orhionmwon LGA", " Ovia North-East LGA", " Ovia South-West LGA", " Owan East LGA", " Owan West LGA", " Uhunmwonde LGA"],
    "Ekiti": ["Ado-Ekiti LGA", " Ikere LGA", " Oye LGA", " Aiyekire (Gbonyin) LGA", " Efon LGA", " Ekiti East LGA", " Ekiti South-West LGA", " Ekiti West LGA", " Emure LGA", " Ido-Osi LGA", " Ijero LGA", " Ikole LGA", " Ilejemeje LGA", " Irepodun/Ifelodun LGA", " Ise/Orun LGA", " Moba LGA"],
    "Gombe": ["Akko LGA", " Balanga LGA", " Billiri LGA", " Dukku LGA", " Dunakaye LGA", " Gombe LGA", " Kaltungo LGA", " Kwami LGA", " Nafada/Bajoga LGA", " Shomgom LGA", " Yamaltu/Deba LGA"],
    "Imo": ["Aboh Mbaise LGA", " Ahiazu Mbaise LGA", " Ehime Mbano LGA", " Ezinihitte Mbaise LGA", " Ideato North LGA", " Ideato South LGA", " Ihitte/Uboma LGA", " Ikeduru LGA", " Isiala Mbano LGA", " Isu LGA", " Mbaitoli LGA", " Ngor Okpala LGA", " Njaba LGA", " Nkwerre LGA", " Nwangele LGA", " Obowo LGA", " Oguta LGA", " Ohaji/Egbema LGA", " Okigwe LGA", " Onuimo LGA", " Orlu LGA", " Orsu LGA", " Oru East LGA", " Oru West LGA", " Owerri Municipal", " Owerri North LGA", " Owerri West LGA", " Nwangele LGA"],
    "Jigawa": ["Auyo LGA", " Babura LGA", " Biriniwa LGA", " Birnin Kudu LGA", " Buji LGA", " Dutse LGA", " Gagarawa LGA", " Garki LGA", " Gumel LGA", " Guri LGA", " Gwaram LGA", " Gwiwa LGA", " Hadejia LGA", " Jahun LGA", " Kafin Hausa LGA", " Kaugama LGA", " Kazaure LGA", " Kiri Kasama LGA", " Kiyawa LGA", " Maigatari LGA", " Malam Madori LGA", " Miga LGA", " Ringim LGA", " Roni LGA", " Sule Tankarkar LGA", " Taura LGA", " Yankwashi LGA"],
    "Kaduna": ["Birnin Gwari LGA", " Chikun LGA", " Giwa LGA", " Igabi LGA", " Ikara LGA", " Jaba LGA", " Jema'a LGA", " Kachia LGA", " Kaduna North LGA", " Kaduna South LGA", " Kagarko LGA", " Kajuru LGA", " Kaura LGA", " Kauru LGA", " Kubau LGA", " Kudan LGA", " Lere LGA", " Makarfi LGA", " Sabon Gari LGA", " Sanga LGA", " Soba LGA", " Zangon Kataf LGA", " Zaria LGA"],
    "Kano": ["Ajingi LGA", " Albasu LGA", " Bagwai LGA", " Bebeji LGA", " Bichi LGA", " Bunkure LGA", " Dala LGA", " Dambatta LGA", " Dawakin kudu LGA", " Dawakin Tofa LGA", " Doguwa LGA", " Fagge LGA", " Gabasawa LGA", " Garko LGA", " Garun Mallam LGA", " Gaya LGA", " Gezawa LGA", " Gwale LGA", " Gwarzo LGA", " Kabo LGA", " Kano Municipal", " Karaye LGA", " Kibiya LGA", " Kiru LGA", " Kumbtso LGA", " Kunchi LGA", " Kura LGA", " Madobi LGA", " Makoda LGA", " Minjibir LGA", " Nassarawa LGA", " Rano LGA", " Rimin Gado LGA", " Rogo LGA", " Shanono LGA", " Sumaila LGA", " Takai LGA", " Tarauni LGA", " Tofa LGA", " Tsanyawa LGA", " Tudun Wada LGA", " Ungogo LGA", " Warawa LGA", " Wudil LGA"],
    "Katsina": ["Bakori LGA", " Batagarawa LGA", " Batsari LGA", " Baure LGA", " Bindawa LGA", " Charanchi LGA", " Dan Musa LGA", " Dandume LGA", " Danja LGA", " Daura LGA", " Dutsi LGA", " Dutsin-Ma LGA", " Faskari LGA", " Funtua LGA", " Ingawa LGA", " Jibia LGA", " Kafur LGA", " Kaita LGA", " Kankara LGA", " Kankia LGA", " Katsina LGA", " Kurfi LGA", " Kusada LGA", " Mai'Adua LGA", " Malumfashi LGA", " Mani LGA", " Mashi LGA", " Matazu LGA", " Musawa LGA", " Rimi LGA", " Sabuwa LGA", " Safana LGA", " Sandamu LGA", " Zango LGA"],
    "Kebbi": ["Aleiro LGA", " Arewa Dandi LGA", " Argungu LGA", " Augie LGA", " Bagudo LGA", " Birnin Kebbi LGA", " Bunza LGA", " Dandi LGA", " Fakai LGA", " Gwandu LGA", " Jega LGA", " Kalgo LGA", " Koko/Besse LGA", " Maiyama LGA", " Ngaski LGA", " Sakaba LGA", " Shanga LGA", " Suru LGA", " Danko/Wasagu LGA", " Yauri LGA", " Zuru LGA"],
    "Kogi": ["Adavi LGA", " Ajaokuta LGA", " Ankpa LGA", " Bassa LGA", " Dekina LGA", " Ibaji LGA", " Idah LGA", " Igalamela-Odolu LGA", " Ijumu LGA", " Kabba/Bunu LGA", " Koton Karfe LGA", " Lokoja LGA", " Mopa-Muro LGA", " Ofu LGA", " Ogori/Magongo LGA", " Okehi LGA", " Okene LGA", " Olamaboro LGA", " Omala LGA", " Yagba East LGA", " Yagba West LGA"],
    "Kwara": ["Asa LGA", " Baruten LGA", " Edu LGA", " Ekiti LGA", " Ifelodun LGA", " Ilorin East LGA", " Ilorin South LGA", " Ilorin West LGA", " Irepodun LGA", " Isin LGA", " Kaiama LGA", " Moro LGA", " Offa LGA", " Oke Ero LGA", " Oyun LGA", " Pategi LGA"],
    "Lagos": ["Agege LGA", " Alimosho Ifelodun LGA", " Alimosho LGA", " Amuwo-Odofin LGA", " Apapa LGA", " Badagry LGA", " Epe LGA", " Eti-Osa LGA", " Ibeju- Lekki LGA", " Ifako/Ijaye LGA", " Ikeja LGA", " Ikorodu LGA", " Kosofe LGA", " Lagos Island LGA", " Lagos Mainland LGA", " Mushin LGA", " Ojo LGA", " Oshodi –Isolo LGA", " Shomolu LGA", " Surulere LGA"],
    "Nasarawa": ["Akwanga LGA", " Awe LGA", " Doma LGA", " Karu LGA", " Keana LGA", " Keffi LGA", " Kokona LGA", " Lafia LGA", " Nassarawa LGA", " Nassarawa/Eggon LGA", " Obi LGA", " Toto LGA", " Wamba LGA"],
    "Niger": ["Agaie LGA", " Agwara LGA", " Bida LGA", " Borgu LGA", " Bosso LGA", " Chanchaga LGA", " Edati LGA", " Gbako LGA", " Gurara LGA", " Katcha LGA", " Kontagora LGA", " Lapai LGA", " Lavun LGA", " Magama LGA", " Mariga LGA", " Mashegu LGA", " Mokwa LGA", " Munya LGA", " Paikoro LGA", " Rafi LGA", " Rijau LGA", " Shiroro LGA", " Suleja LGA", " Tafa LGA", " Wushishi LGA"],
    "Ogun": ["Abeokuta North LGA", " Abeokuta South LGA", " Ado-Odo/Ota LGA", " Ewekoro LGA", " Ifo LGA", " Ijebu East LGA", " Ijebu North LGA", " Ijebu North East LGA", " Ijebu Ode LGA", " Ikenne LGA", " Imeko Afon LGA", " Ipokia LGA", " Obafemi Owode LGA", " Odogbolu LGA", " Odeda LGA", " Ogun Waterside LGA", " Remo North LGA", " Sagamu LGA", " Yewa North LGA", " Yewa South LGA"],
    "Ondo": ["Akoko north LGA", " Akoko north east LGA", " Akoko south east LGA", " Akoko south LGA", " Akure north LGA", " Akure LGA", " Idanre LGA", " Ifedore LGA", " Ese Odo LGA", " Ilaje LGA", " Ile Oluji/Okeigbo LGA", " Irele LGA", " Odigbo LGA", " Okitipupa LGA", " Ondo LGA", " Ondo east LGA", " Ose LGA", " Owo LGA"],
    "Osun": ["Atakumosa west LGA", " Atakumosa east LGA", " Ayedaade LGA", " Ayedire LGA", " Bolawaduro LGA", " Boripe", " LGA", " Ede LGA", " Ede north LGA", " Egbedore LGA", " Ejigbo LGA", " Ife north LGA", " Ife central LGA", " Ife south LGA", " Ife east LGA", " Ifedayo", " Ifelodun LGA", " Ilesha west LGA", " Ila- orangun LGA", " Ilesah east LGA", " Irepodun LGA", " Irewole LGA", " Isokan LGA", " Iwo LGA", " Obokun LGA", " Odo-otin LGA", " ola oluwa LGA", " olorunda LGA", " Oriade LGA", " Orolu LGA", " Osogbo LGA"],
    "Oyo": ["Akinyele Moniya LGA", " Afijio Jobele LGA", " Egbeda Egbeda LGA", " Ibadan North Agodi Gate LGA", " Ibadan North-East Iwo Road LGA", " Ibadan North-West LGA", " Ibadan South-West Ring Road LGA", " Ibadan South-East Mapo LGA", " Ibarapa Central LGA", " Ibarapa East Eruwa LGA", " Ido LGA", " Irepo LGA", " Iseyin LGA", " Kajola LGA", " Lagelu LGA", " Ogbomosho North LGA", " Ogbomosho South LGA", " Oyo West Ojongbodu LGA", " Atiba Ofa Meta LGA", " Atisbo Tede LGA", " Saki West LGA", " Saki East LGA", " Itesiwaju Otu LGA", " Iwajowa LGA", " Ibarapa North LGA", " Olorunsogo LGA", " Oluyole LGA", " Ogo Oluwa LGA", " Surulere LGA", " Orelope LGA", " Ori Ire LGA", " Oyo East LGA", " Ona Ara LGA"],
    "Plateau": ["Barkin Ladi LGA", " Bassa LGA", " Bokkos LGA", " Jos East LGA", " Jos North LGA", " Jos South LGA", " Kanam LGA", " Kanke LGA", " Langtang North LGA", " Langtang South LGA", " Mangu LGA", " Mikang LGA", " Pankshin LGA", " Qua'an Pan LGA", " Riyom LGA", " Shendam LGA", " Wase LGA"],
    "Rivers": ["Abua-Odual LGA", " Ahoada East LGA", " Ahoada West LGA", " Akuku-Toru LGA", " Andoni LGA", " Asari-Toru LGA", " Bonny LGA", " Degema LGA", " Eleme LGA", " Emohua LGA", " Etche LGA", " Gokana LGA", " Ikwerre LGA", " Oyigbo LGA", " Khana LGA", " Obio-Akpor LGA", " Ogba-Egbema-Ndoni LGA", " Ogu-bolo LGA", " Okrika LGA", " Omumma LGA", " Opobo-Nkoro LGA", " Portharcourt LGA", " Tai LGA"],
    "Sokoto": ["Binji LGA", " Bodinga LGA", " Dange Shuni LGA", " Gada LGA", " Goronyo LGA", " Gudu LGA", " Gwadabawa LGA", " Illela LGA", " Isa LGA", " Kebbe LGA", " Kware LGA", " Rabah LGA", " Sabon Birni LGA", " Shagari LGA", " Silame LGA", " Sokoto North LGA", " Sokoto South LGA", " Tambuwal LGA", " Tangaza LGA", " Tureta LGA", " Wamako LGA", " Wurno LGA", " Yabo LGA"],
    "Taraba": ["Ardo Kola LGA", " Bali LGA", " Donga LGA", " Gashaka LGA", " Gassol LGA", " Ibi LGA", " Jalingo LGA", " Karim Lamido LGA", " Kurmi LGA", " Lau LGA", " Sardauna LGA", " Takum LGA", " Ussa LGA", " Wukari LGA", " Yorro LGA", " Zing LGA"],
    "Yobe": ["Bade LGA", " Bursari LGA", " Damaturu LGA", " Geidam LGA", " Gujba LGA", " Gulani LGA", " Fika LGA", " Fune LGA", " Jakusko LGA", " Karasuwa LGA", " Machina LGA", " Nangere LGA", " Nguru LGA", " Potiskum LGA", " Tarmuwa LGA", " Yunusari LGA", " Yusufari LGA"],
    "Zamfara": ["Anka LGA", " Bakura LGA", " Birnin Magaji/Kiyaw LGA", " Bukkuyum LGA", " Bungudu LGA", " Tsafe LGA", " Gummi LGA", " Gusau LGA", " Kaura Namoda LGA", " Maradun LGA", " Maru LGA", " Shinkafi LGA", " Talata Mafara LGA", " Zurmi LGA"]
}

const slider = document.getElementById("myRange");
const output = document.getElementById("rangeOutput");
output.innerHTML = slider.value;

slider.oninput = function() {
  output.innerHTML = this.value;
}



let stateSelector = document.querySelector('.states');
let LGASelector = document.querySelector('.lga')
let stateSelectorPreferred = document.querySelector('.delivery__location__preferred .states')
let LGASelectorPreferred = document.querySelector('.delivery__location__preferred .lga')


document.addEventListener('DOMContentLoaded', function () {
    initStates(stateSelector)
    initStates(stateSelectorPreferred)
    const selectedState = stateSelector.value
    const selectedStatePreferred = stateSelectorPreferred.value
    populateLGAs(selectedStatePreferred, LGASelectorPreferred)
    populateLGAs(selectedState, LGASelector)
})

stateSelector.addEventListener('change', (e) => {
    const selectedState = e.target.value
    clearOptionsElements(LGASelector)
    populateLGAs(selectedState, LGASelector)
})

stateSelectorPreferred.addEventListener('change', (e) => {
    const selectedState = e.target.value
    clearOptionsElements(LGASelectorPreferred)
    populateLGAs(selectedState, LGASelectorPreferred)
})

function clearOptionsElements(selector) {
    while (selector.options.length > 0) {
        selector.options.remove(0)
    }
}
function initStates(selector) {
    allNigerianStates.forEach(state => {
        const option = new Option(state, state)
        selector.append(option)
    })
}

function populateLGAs(state, selector) {
    const stateLGAs = allLGAs[state]
    stateLGAs.forEach((lga) => {
        const option = new Option(lga, lga)
        selector.append(option)
    })
}
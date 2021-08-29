<?php
// server 36

$koneksi = mysqli_connect('localhost','root','','db_grafikprocar') or die (mysqli_error($koneksi));

$query = "SELECT * FROM tbl_grafik2";
$result = mysqli_query($koneksi,$query) or die ('error fungsi');

while($row = mysqli_fetch_array($result)){

	$nilai1 = $row['MFNAME'];
	$nilai2 = $row['ACCOUNTNO'];
	$nilai3 = $row['ApplicationType'];
	$nilai4 = $row['HomeAddr'];
	$nilai5 = $row['HomeCity'];
	$nilai6 = $row['MailAddr'];
	$nilai7 = $row['MailCity'];
	$nilai8 = $row['ContactAddr'];
	$nilai9 = $row['ContactCity'];
	$nilai10 = $row['OTR'];
	
	$nilai11 = $row['MaxFunding'];
	$nilai12 = $row['OSPokokReal'];
	$nilai13 = $row['OSBungaReal'];
	$nilai14 = $row['DSR'];
	$nilai15 = $row['Bucket'];
	$nilai16 = $row['Penjamin'];
	$nilai17 = $row['CloseType'];
	$nilai18 = $row['BOOKINGDATE'];
	$nilai19 = $row['CLOSETXNDATE'];
	$nilai20 = $row['RepossesSts'];
	
	$nilai21 = $row['AccountSts'];
	$nilai22 = $row['RealisasiDate'];
	$nilai23 = $row['CLOSEDATE'];
	$nilai24 = $row['PeriodeByrAkh'];
	$nilai25 = $row['StsDate'];
	$nilai26 = $row['DPD'];
	$nilai27 = $row['Areaname'];
	$nilai28 = $row['CustID'];
	$nilai29 = $row['MainDealerName'];
	$nilai30 = $row['MerkName'];
	
	$nilai31 = $row['ModelName'];
	$nilai32 = $row['Type'];
	$nilai33 = $row['HargaBarang'];
	$nilai34 = $row['DownPayment'];
	$nilai35 = $row['DPPct'];
	$nilai36 = $row['Kind'];
	$nilai37 = $row['NoPolisi'];
	$nilai38 = $row['NoRangka'];
	$nilai39 = $row['NoMesin'];
	$nilai40 = $row['NoBPKB'];
	
	$nilai41 = $row['Warna'];
	$nilai42 = $row['BPKBAn'];
	$nilai43 = $row['TahunKendaraan'];
	$nilai44 = $row['ThnRakit'];
	$nilai45 = $row['Condition'];
	$nilai46 = $row['WorkDay'];
	$nilai47 = $row['Setoran'];
	$nilai48 = $row['TenorThn'];
	$nilai49 = $row['RecommendPrincipal'];
	$nilai50 = $row['RecommendOTR'];
	
	$nilai51 = $row['BPKBCity'];
	$nilai52 = $row['TrayekID'];
	$nilai53 = $row['Jurusan'];
	$nilai54 = $row['KotaTrayek'];
	$nilai55 = $row['GrpTrayek'];
	$nilai56 = $row['JNSTrayek'];
	$nilai57 = $row['Category'];
	$nilai58 = $row['Purposes'];
	$nilai59 = $row['SurveyorID'];
	$nilai60 = $row['Surveyor'];
	
	$nilai61 = $row['CommID1'];
	$nilai62 = $row['CommName1'];
	$nilai63 = $row['CommName2'];
	$nilai64 = $row['CommID2'];
	$nilai65 = $row['DealerId'];
	$nilai66 = $row['DealerName'];
	$nilai67 = $row['AccBankID'];
	$nilai68 = $row['BankName'];
	$nilai69 = $row['AccBranch'];
	$nilai70 = $row['AccNo'];
	
	$nilai71 = $row['AccAtasNama'];
	$nilai72 = $row['LOCID'];
	$nilai73 = $row['ACCID'];
	$nilai74 = $row['NoRek'];
	$nilai75 = $row['NoPin'];
	$nilai76 = $row['AccountName'];
	$nilai77 = $row['BranchID'];
	$nilai78 = $row['BRANCHCODE'];
	$nilai79 = $row['BranchName'];
	$nilai80 = $row['Tenor'];
	
	$nilai81 = $row['FlatRate'];
	$nilai82 = $row['EffectiveRate'];
	$nilai83 = $row['FlatRateDealer'];
	$nilai84 = $row['EffectiveRateDealer'];
	$nilai85 = $row['PokokMurni'];
	$nilai86 = $row['PokokPinjaman'];
	$nilai87 = $row['TotPremiIsr'];
	$nilai88 = $row['PorsiAsuransi'];
	$nilai89 = $row['InsrPrePaid'];
	$nilai90 = $row['TotalBunga'];
	
	$nilai91 = $row['Loantype'];
	$nilai92 = $row['DealerOtherFee'];
	$nilai93 = $row['Cicil1'];
	$nilai94 = $row['BAdminKredit'];
	$nilai95 = $row['FiduciaTotal'];
	$nilai96 = $row['Angsuran'];
	$nilai97 = $row['AdminInsCar'];
	$nilai98 = $row['Fee'];
	$nilai99 = $row['RefundIsr1'];
	$nilai100 = $row['RefundIsr0'];
	
	$nilai101 = $row['RefundAdm1'];
	$nilai102 = $row['RefundAdm0'];
	$nilai103 = $row['RefundNPV1'];
	$nilai104 = $row['RefundNPV0'];
	$nilai105 = $row['COMPProv1'];
	$nilai106 = $row['COMPProv0'];
	$nilai107 = $row['COMPOther1'];
	$nilai108 = $row['COMPOther0'];
	$nilai109 = $row['Compensation'];
	$nilai110 = $row['HutangDealer'];
	
	$nilai111 = $row['CairDealer'];
	$nilai112 = $row['InsrType'];
	$nilai113 = $row['DealerSts'];
	$nilai114 = $row['CustAddr'];
	$nilai115 = $row['CustRT'];
	$nilai116 = $row['CustRW'];
	$nilai117 = $row['CustKel'];
	$nilai118 = $row['CustKec'];
	$nilai119 = $row['CustKab'];
	$nilai120 = $row['CustProp'];
	
	$nilai121 = $row['CustMailAddr'];
	$nilai122 = $row['CustMailRT'];
	$nilai123 = $row['CustMailRW'];
	$nilai124 = $row['CustMailKelurahan'];
	$nilai125 = $row['CustMailKecamatan'];
	$nilai126 = $row['CustmailKab'];
	$nilai127 = $row['CustMailProp'];
	$nilai128 = $row['CustMailZIP'];
	$nilai129 = $row['Ph1'];
	$nilai130 = $row['Ph2'];
	
	$nilai131 = $row['Ph3'];
	$nilai132 = $row['HP1'];
	$nilai133 = $row['HP2'];
	$nilai134 = $row['Occupation'];
	$nilai135 = $row['LineOFBuss'];
	$nilai136 = $row['ContactName'];
	$nilai137 = $row['Address'];
	$nilai138 = $row['RT'];
	$nilai139 = $row['RW'];
	$nilai140 = $row['Kelurahan'];
	
	$nilai141 = $row['Kecamatan'];
	$nilai142 = $row['Kabupaten'];
	$nilai143 = $row['ZIP'];
	$nilai144 = $row['Propinsi'];
	$nilai145 = $row['ContactPhone'];
	$nilai146 = $row['BrokerID'];
	$nilai147 = $row['Brokername'];
	$nilai148 = $row['PenjaminType'];
	$nilai149 = $row['PenjaminName'];
	$nilai150 = $row['GROSSIncome'];
	
	$nilai151 = $row['MaintenanceExpense'];
	$nilai152 = $row['OtherExpense'];
	$nilai153 = $row['NoTrayek'];
	$nilai154 = $row['AppType'];
	$nilai155 = $row['PenjType'];
	$nilai156 = $row['ChassisParipasu'];
	$nilai157 = $row['NoRekParipasu'];
	$nilai158 = $row['MarketingOffId'];
	$nilai159 = $row['MarketingOffName'];
	$nilai160 = $row['FINCATID'];
	
	$nilai161 = $row['FINCATNAME'];
	$nilai162 = $row['BRANCHCODEORI'];
	$nilai163 = $row['BRANCHNAMEORI'];
	$nilai164 = $row['COLLBUSCODE'];
	$nilai165 = $row['COLLBUSNAME'];
	$nilai166 = $row['CURRENCYCODE'];
	$nilai167 = $row['CURRENCYNAME'];
	$nilai168 = $row['REFNO'];
	$nilai169 = $row['PROVISIONFEE'];
	$nilai170 = $row['FNADMINFEE'];
	
	$nilai171 = $row['FNCHECKDOCFEE'];
	$nilai172 = $row['FNFIDUCIAFEE'];
	$nilai173 = $row['FNPROVISIONFEE'];
	$nilai174 = $row['ADMFEE'];
	$nilai175 = $row['FIDUCIAFEE'];
	$nilai176 = $row['CHECKDOCFEE'];
	$nilai177 = $row['SURVEYFEE'];
	$nilai178 = $row['DEALERSUBSIDIES'];
	$nilai179 = $row['SETOFFVALUE'];
	$nilai180 = $row['COLLECTNAMEBI'];
	
	$nilai181 = $row['COLLECTREMARKBI'];
	$nilai182 = $row['COLLECTNAMEINT'];
	$nilai183 = $row['COLLECTREMARKINT'];
	$nilai184 = $row['JFORPLEDGEBANK'];
	$nilai185 = $row['SisaTenor'];
	$nilai186 = $row['PRINCIPALOD'];
	$nilai187 = $row['INTERESTOD'];
	$nilai188 = $row['ACCEXP'];
	$nilai189 = $row['FINGROUPCODE'];
	$nilai190 = $row['FINGROUPNAME'];
	
	$nilai191 = $row['FINCATTYPE'];
	$nilai192 = $row['FINCATTYPENAME'];
	$nilai193 = $row['CUSTZIPID'];
	$nilai194 = $row['CUSTZIPIDHOME'];
	$nilai195 = $row['CUSTZIPIDMAIL'];
	$nilai196 = $row['CUSTTYPE'];
	$nilai197 = $row['CUSTTYPENAME'];
	$nilai198 = $row['JOBTITLENAME'];
	$nilai199 = $row['COMPANYNAME'];
	$nilai200 = $row['COMPANYBUSINESS'];
	$nilai201 = $row['JFPORTION'];

	
	// pengiriman ke situsku.com via CURL
	$url = "10.20.0.60/grafik/terima_dokumen.php";

	$curlHandle = curl_init();
	curl_setopt($curlHandle, CURLOPT_URL, $url);
	curl_setopt($curlHandle, CURLOPT_POSTFIELDS, "data1=".$nilai1."&data2=".$nilai2."&data3=".$nilai3."&data4=".$nilai4."&data5=".$nilai5."&data6=".$nilai6."&data7=".$nilai7."&data8=".$nilai8."&data9=".$nilai9."&data10=".$nilai10
													."&data11=".$nilai11."&data12=".$nilai12."&data13=".$nilai13."&data14=".$nilai14."&data15=".$nilai15."&data16=".$nilai16."&data17=".$nilai17."&data18=".$nilai18."&data19=".$nilai19."&data20=".$nilai20
													."&data21=".$nilai21."&data22=".$nilai22."&data23=".$nilai23."&data24=".$nilai24."&data25=".$nilai25."&data26=".$nilai26."&data27=".$nilai27."&data28=".$nilai28."&data29=".$nilai29."&data30=".$nilai30
													."&data31=".$nilai31."&data32=".$nilai32."&data33=".$nilai33."&data34=".$nilai34."&data35=".$nilai35."&data36=".$nilai36."&data37=".$nilai37."&data38=".$nilai38."&data39=".$nilai39."&data40=".$nilai40
													."&data41=".$nilai41."&data42=".$nilai42."&data43=".$nilai43."&data44=".$nilai44."&data45=".$nilai45."&data46=".$nilai46."&data47=".$nilai47."&data48=".$nilai48."&data49=".$nilai49."&data50=".$nilai50
													."&data51=".$nilai51."&data52=".$nilai52."&data53=".$nilai53."&data54=".$nilai54."&data55=".$nilai55."&data56=".$nilai56."&data57=".$nilai57."&data58=".$nilai58."&data59=".$nilai59."&data60=".$nilai60
													."&data61=".$nilai61."&data62=".$nilai62."&data63=".$nilai63."&data64=".$nilai64."&data65=".$nilai65."&data66=".$nilai66."&data67=".$nilai67."&data68=".$nilai68."&data69=".$nilai69."&data70=".$nilai70
													."&data71=".$nilai71."&data72=".$nilai72."&data73=".$nilai73."&data74=".$nilai74."&data75=".$nilai75."&data76=".$nilai76."&data77=".$nilai77."&data78=".$nilai78."&data79=".$nilai79."&data80=".$nilai80
													."&data81=".$nilai81."&data82=".$nilai82."&data83=".$nilai83."&data84=".$nilai84."&data85=".$nilai85."&data86=".$nilai86."&data87=".$nilai87."&data88=".$nilai88."&data89=".$nilai89."&data90=".$nilai90
													."&data91=".$nilai91."&data92=".$nilai92."&data93=".$nilai93."&data94=".$nilai94."&data95=".$nilai95."&data96=".$nilai96."&data97=".$nilai97."&data98=".$nilai98."&data99=".$nilai99."&data100=".$nilai100
													."&data101=".$nilai101."&data102=".$nilai102."&data103=".$nilai103."&data104=".$nilai104."&data105=".$nilai105."&data106=".$nilai106."&data107=".$nilai107."&data108=".$nilai108."&data109=".$nilai109."&data110=".$nilai110
													."&data111=".$nilai111."&data112=".$nilai112."&data113=".$nilai113."&data114=".$nilai114."&data115=".$nilai115."&data116=".$nilai116."&data117=".$nilai117."&data118=".$nilai118."&data119=".$nilai119."&data120=".$nilai120
													."&data121=".$nilai121."&data122=".$nilai122."&data123=".$nilai123."&data124=".$nilai124."&data125=".$nilai125."&data126=".$nilai126."&data127=".$nilai127."&data128=".$nilai128."&data129=".$nilai129."&data130=".$nilai130
													."&data131=".$nilai131."&data132=".$nilai132."&data133=".$nilai133."&data134=".$nilai134."&data135=".$nilai135."&data136=".$nilai136."&data137=".$nilai137."&data138=".$nilai138."&data139=".$nilai139."&data140=".$nilai140
													."&data141=".$nilai141."&data142=".$nilai142."&data143=".$nilai143."&data144=".$nilai144."&data145=".$nilai145."&data146=".$nilai146."&data147=".$nilai147."&data148=".$nilai148."&data149=".$nilai149."&data150=".$nilai150
													."&data151=".$nilai151."&data152=".$nilai152."&data153=".$nilai153."&data154=".$nilai154."&data155=".$nilai155."&data156=".$nilai156."&data157=".$nilai157."&data158=".$nilai158."&data159=".$nilai159."&data160=".$nilai160
													."&data161=".$nilai161."&data162=".$nilai162."&data163=".$nilai163."&data164=".$nilai164."&data165=".$nilai165."&data166=".$nilai166."&data167=".$nilai167."&data168=".$nilai168."&data169=".$nilai169."&data170=".$nilai170
													."&data171=".$nilai171."&data172=".$nilai172."&data173=".$nilai173."&data174=".$nilai174."&data175=".$nilai175."&data176=".$nilai176."&data177=".$nilai177."&data178=".$nilai178."&data179=".$nilai179."&data180=".$nilai180
													."&data181=".$nilai181."&data182=".$nilai182."&data183=".$nilai183."&data184=".$nilai184."&data185=".$nilai185."&data186=".$nilai186."&data187=".$nilai187."&data188=".$nilai188."&data189=".$nilai189."&data190=".$nilai190
													."&data191=".$nilai191."&data192=".$nilai192."&data193=".$nilai193."&data194=".$nilai194."&data195=".$nilai195."&data196=".$nilai196."&data197=".$nilai197."&data198=".$nilai198."&data199=".$nilai199."&data200=".$nilai200."&data201=".$nilai201);
	curl_setopt($curlHandle, CURLOPT_HEADER, 0);
	curl_setopt($curlHandle, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($curlHandle, CURLOPT_TIMEOUT,30);
	curl_setopt($curlHandle, CURLOPT_POST, 1);
	curl_exec($curlHandle);
	curl_close($curlHandle);

}

echo "<h1>Transfer Done !!</h1>";

?>
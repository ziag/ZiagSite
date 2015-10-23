<?php
class Ticker{
	var $nom;
	
	function getName(){
		/*	
			$cie = array("ABH","BBD-B.TO","CNR","AAE.V");
			
			$cie = array("BBD-B.TO","GOOG","MSFT","AAPL","GE","AAE.V","BNS","AA","NT","ABH","TD","JNX.V","SLF","CJB" 
				,"ATD.B.TO","GW","GE","C","PJC-A.TO","WFC","INDU","LB","BMO","CTC.A","SU","RY","XIU","BCE","GIB.A.TO"							
				,"DDS","GM","T","CNR","K","PEA.V","BVF","GWO","HFD","IGM","G","OPC.TO","OIL","AEM","ICN","SAP");
  		*/ 
  	/*		$cie = array("FFH","HND","ELF","BMO-H","HOD","WRK.UN","HQD","THD","BEK.B","HSD","VTN","TDS-B","NCC.A","LLL","HXD","AKT.A","T.A","HAD","CGI","HFD","EXT","WN-D","OTC","HJD","RY-H","HED","ABO.B","CIU-B","BE-A","WN-C","MST.UN","HMD","EVT","MSD","BCE-T","SPO.UN","STR.E","BBO","BRN-A","TRZ.A","SBN-A","BMO-M","HW","HIG","PPL-A","WN-A","HGD","XCR","BLD","BCE-A","NVN","IQW-D","LPV.UN","CWG","CBM","ND","WXI","FEC","SAS","HSL","LOR","ISR","TPS","PFN","ADA","ORA","DNT","CHD","EXT","VTN","NT","CXS","BLD","CEK","HWO","ERD","SDI","ANS","FRB","IQW-C","NTL-F","COB","MST.UN","CAL","MPH","SHR","NPF.UN","DNG","FMI","HRG","WG","SEG","CFN.UN","LUN","CYY","TZT","NTL-G","RKN","RTT","HYD","XIU","NT","HNU","HOU","TCK.B","OPC","LUN","MFC","TA","EQN","SU","TRP","BBD.B","UTS","GCE","TLM","RY","BNS","PCA","BCE","ECA","NXY","YRI","HFU","UUU","TD","BMO","FSY","HGU","K","XFN","ABX","HXU","CNQ","S","HEU","YLO.UN","RCI.B","PWT.UN","G","HRG","NVN","SLF","WTN","HEG","POT","ENB","OSK","PRE","HOD");
  	*/	
/*
  	$cie = array("FFH.TO","HND.TO","ELF.TO","BMO-H.TO","HOD.TO","WRK.UN.TO","HQD.TO","THD.TO","BEK.B.TO","HSD.TO","VTN.TO","TDS-B.TO","NCC.A.TO","LLL.TO","HXD.TO","AKT.A.TO","T.A.TO","HAD.TO","CGI.TO","HFD.TO","EXT.TO","WN-D.TO","OTC.TO","HJD.TO","RY-H.TO","HED.TO","ABO.B.TO","CIU-B.TO","BE-A.TO","WN-C.TO","MST.UN.TO","HMD.TO","EVT.TO","MSD.TO","BCE-T.TO","SPO.UN.TO","STR.E.TO","BBO.TO","BRN-A.TO","TRZ.A.TO","SBN-A.TO","BMO-M.TO","HW.TO","HIG.TO","PPL-A.TO","WN-A.TO","HGD.TO","XCR.TO","BLD.TO","BCE-A.TO","NVN.TO","IQW-D.TO","LPV.UN.TO","CWG.TO","CBM.TO","ND.TO","WXI.TO","FEC.TO","SAS.TO","HSL.TO","LOR.TO","ISR.TO","TPS.TO","PFN.TO","ADA.TO","ORA.TO","DNT.TO","CHD.TO","EXT.TO","VTN.TO","NT.TO","CXS.TO","BLD.TO","CEK.TO","HWO.TO","ERD.TO","SDI.TO","ANS.TO","FRB.TO","IQW-C.TO","NTL-F.TO","COB.TO","MST.UN.TO","CAL.TO","MPH.TO","SHR.TO","NPF.UN.TO","DNG.TO","FMI.TO","HRG.TO","WG.TO","SEG.TO","CFN.UN.TO","LUN.TO","CYY.TO","TZT.TO","NTL-G.TO","RKN.TO","RTT.TO","HYD.TO","XIU.TO","NT.TO","HNU.TO","HOU.TO","TCK.B.TO","OPC.TO","LUN.TO","MFC.TO","TA.TO","EQN.TO","SU.TO","TRP.TO","BBD.B.TO","UTS.TO","GCE.TO","TLM.TO","RY.TO","BNS.TO","PCA.TO","BCE.TO","ECA.TO","NXY.TO","YRI.TO","HFU.TO","UUU.TO","TD.TO","BMO.TO","FSY.TO","HGU.TO","K.TO","XFN.TO","ABX.TO","HXU.TO","CNQ.TO","S.TO","HEU.TO","YLO.UN.TO","RCI.B.TO","PWT.UN.TO","G.TO","HRG.TO","NVN.TO","SLF.TO","WTN.TO","HEG.TO","POT.TO","ENB.TO","OSK.TO","PRE.TO","HOD");				 
  */
  /*	$cie = array("FFH "," HND "," ELF "," BMO-H "," HOD "," WRK.UN "," HQD "," THD "," BEK.B "," HSD "
  	," VTN "," TDS-B "," NCC.A "," LLL "," HXD "," AKT.A "," T.A "," HAD "," CGI "," HFD "," EXT "," WN-D "
  	," OTC "," HJD "," RY-H "," HED "," ABO.B "," CIU-B "," BE-A "," WN-C "," MST.UN "," HMD "," EVT "," MSD "
  	," BCE-T "," SPO.UN "," STR.E "," BBO "," BRN-A "," TRZ.A "," SBN-A "," BMO-M "," HW "," HIG "," PPL-A "
  	," WN-A "," HGD "," XCR "," BLD "," BCE-A "," NVN "," IQW-D "," LPV.UN "," CWG "," CBM "," ND "," WXI "
  	," FEC "," SAS "," HSL "," LOR "," ISR "," TPS "," PFN "," ADA "," ORA "," DNT "," CHD "," EXT "," VTN "
  	," NT "," CXS "," BLD "," CEK "," HWO "," ERD "," SDI "," ANS "," FRB "," IQW-C "," NTL-F "," COB "
  	," MST.UN "," CAL "," MPH "," SHR "," NPF.UN "," DNG "," FMI "," HRG "," WG "," SEG "," CFN.UN "," LUN "
  	," CYY "," TZT "," NTL-G "," RKN "," RTT "," HYD "," XIU "," NT "," HNU "," HOU "," TCK.B "," OPC "
  	," LUN "," MFC "," TA "," EQN "," SU "," TRP "," BBD.B "," UTS "," GCE "," TLM "," RY "," BNS "," PCA "
  	," BCE "," ECA "," NXY "," YRI "," HFU "," UUU "," TD "," BMO "," FSY "," HGU "," K "," XFN "," ABX "
  	," HXU "," CNQ "," S "," HEU "," YLO.UN "," RCI.B "," PWT.UN "," G "," HRG "," NVN "," SLF "," WTN "
  	," HEG "," POT "," ENB "," OSK "," PRE "," HOD ");
*/
	/*
 	$cie = array("AAB.TO","AAH.TO","AAK.TO","ABH.TO","ABT.TO","ABX.TO","AC.A.TO","AC.B.TO","ACC.TO","ACD.TO","ACE.A.TO","ACE.B.TO","ACM.A.TO","ACM.B.TO","ACN.TO","ACO.PR.A.TO","ACO.X.TO","ACO.Y.TO","ACQ.UN.TO","ACU.TO","AD.TO","ADA.TO","ADJ.UN.TO","ADN.UN.TO","ADS.TO","ADW.A.TO","ADX.TO","AEI.TO","AEM.TO","AEN.TO","AER.TO","AET.UN.TO","AEU.UN.TO","AEZ.TO","AF.TO","AFN.UN.TO","AFU.UN.TO","AG.DB.TO","AG.UN.TO","AGB.UN.TO","AGF.B.TO","AGI.TO","AGU.TO","AHX.TO","AI.UN.TO","AIF.UN.TO","AIG.UN.TO","AIQ.TO","AKL.TO","AKT.A.TO","ALA.UN.TO","ALB.TO","ALB.PR.A.TO","ALC.TO","ALS.TO","AMC.TO","AMF.TO","AMM.TO","AND.TO","ANO.TO","ANP.TO","ANS.TO","ANS.WT.TO","ANV.TO","ANX.TO","AOG.UN.TO","AOG.WT.TO","AP.UN.TO","APF.DB.TO","APF.DB.A.TO","APF.UN.TO","APG.TO","API.TO","APV.TO","AQA.TO","AQI.TO","AQL.TO","ARA.TO","ARE.TO","ARF.UN.TO","ARG.TO","ARX.TO","ARZ.TO","ASC.PR.A.TO","ASF.TO","ATA.TO","ATB.TO","ATD.A.TO","ATD.B.TO","ATN.TO","ATP.UN.TO","ATQ.TO","AUA.TO","AUI.TO","AV.UN.TO","AV.WT.TO","AVF.UN.TO","AVM.TO","AVN.DB.C.TO","AVN.DB.E.TO","AVN.DB.F.TO","AVN.UN.TO","AW.UN.TO","AX.UN.TO","AXB.TO","AXC.TO","AXL.TO","AXR.TO","AXU.TO","AXX.TO","AZC.TO","AZD.TO","AZZ.TO","BA.UN.TO","BAA.TO","BAD.UN.TO","BAJ.TO","BAM.A.TO","BAM.PR.B.TO","BAM.PR.C.TO","BAM.PR.E.TO","BAM.PR.H.TO","BAM.PR.I.TO","BAM.PR.J.TO","BAM.PR.K.TO","BAM.PR.M.TO","BAM.PR.N.TO","BAM.PR.O.TO","BAN.TO","BBD.A.TO","BBD.B.TO","BBD.PR.B.TO","BBD.PR.C.TO","BBD.PR.D.TO","BBL.A.TO","BBO.TO","BCB.TO","BCE.TO","BCE.PR.A.TO","BCE.PR.B.TO","BCE.PR.C.TO","BCE.PR.D.TO","BCE.PR.G.TO","BCE.PR.I.TO","BCE.PR.R.TO","BCE.PR.S.TO","BCE.PR.T.TO","BCE.PR.Y.TO","BCE.PR.Z.TO","BCF.TO","BDA.UN.TO","BDB.NT.N.TO","BDI.UN.TO","BDT.UN.TO","BDY.TO","BE.TO","BEI.UN.TO","BEN.TO","BEV.TO","BFC.TO","BIG.PR.B.TO","BIM.TO","BIR.TO","BKP.TO","BKX.TO","BLD.TO","BLS.TO","BLU.TO","BLX.TO","BLZ.TO","BMO.TO","BMO.PR.J.TO","BMO.PR.K.TO","BMO.PR.L.TO","BMO.PR.M.TO","BMO.PR.N.TO","BMO.PR.V.TO","BMR.TO","BMT.TO","BN.TO","BNA.PR.A.TO","BNA.PR.C.TO","BNB.TO","BNC.TO","BNC.WT.TO","BNE.TO","BNG.TO","BNK.TO","BNK.WT.TO","BNK.WT.A.TO","BNP.DB.TO","BNP.DB.A.TO","BNP.UN.TO","BNS.TO","BNS.PR.J.TO","BNS.PR.K.TO","BNS.PR.L.TO","BNS.PR.M.TO","BNS.PR.N.TO","BNS.PR.O.TO","BNS.PR.P.TO","BNS.PR.Q.TO","BNS.PR.R.TO","BNS.PR.T.TO","BNS.PR.X.TO","BPF.UN.TO","BPO.TO","BPO.PR.F.TO","BPO.PR.H.TO","BPO.PR.I.TO","BPO.PR.J.TO","BPO.PR.K.TO","BPO.PR.U.TO","BPP.TO","BPT.UN.TO","BQE.TO","BR.UN.TO","BRB.TO","BRE.UN.TO","BRK.UN.TO","BRN.PR.A.TO","BRT.TO","BSC.TO","BSD.PR.A.TO","BSD.UN.TO","BSI.UN.TO","BST.UN.TO","BSY.TO","BT.UN.TO","BTE.UN.TO","BTO.TO","BUI.TO","BVF.TO","BVX.TO","BWC.TO","BWR.TO","BXN.TO","BYD.UN.TO","BZA.TO","CAE.TO","CAI.DB.TO","CAL.TO","CAM.TO","CAR.UN.TO","CAS.TO","CAX.TO","CAZ.TO","CBB.UN.TO","CBD.TO","CBD.A.TO","CBK.UN.TO","CBM.TO","CBO.TO","CBO.A.TO","CBQ.TO","CBQ.A.TO","CBU.TO","CBW.TO","CBW.PR.A.TO","CBY.TO","CCA.TO","CCI.TO","CCJ.TO","CCJ.WT.TO","CCL.B.TO","CCO.TO","CCQ.UN.TO","CCS.PR.C.TO","CCT.TO","CCZ.TO","CDH.TO","CDL.A.TO","CDL.B.TO","CDM.TO","CDU.TO","CDV.TO","CDW.UN.TO","CDZ.TO","CDZ.A.TO","CEE.TO","CEF.A.TO","CEK.TO","CET.UN.TO","CEU.UN.TO","CEW.TO","CEW.A.TO","CFP.TO","CFT.TO","CFW.TO","CFX.UN.TO","CG.TO","CGA.TO","CGC.TO","CGH.TO","CGI.TO","CGJ.TO","CGO.TO","CGR.TO","CGS.TO","CGX.DB.TO","CGX.UN.TO","CHD.TO","CHE.UN.TO","CHF.UN.TO","CHL.UN.TO","CHZ.UN.TO","CIC.TO","CIE.TO","CIF.TO","CIF.A.TO","CIP.UN.TO","CIR.TO","CIR.PR.A.TO","CIT.UN.TO","CIU.PR.A.TO","CIW.UN.TO","CIW.WT.TO","CIX.TO","CJB.TO","CJR.B.TO","CJT.DB.TO","CJT.UN.TO","CKI.TO","CL.PR.B.TO","CLB.DB.TO","CLB.UN.TO","CLC.UN.TO","CLF.TO","CLF.A.TO","CLL.TO","CLL.DB.A.TO","CLM.TO","CLO.TO","CLO.A.TO","CLR.DB.A.TO","CLR.UN.TO","CLS.TO","CLT.TO","CLU.TO","CLU.A.TO","CM.TO","CM.PR.A.TO","CM.PR.D.TO","CM.PR.E.TO","CM.PR.G.TO","CM.PR.H.TO","CM.PR.I.TO","CM.PR.J.TO","CM.PR.K.TO","CM.PR.L.TO","CM.PR.M.TO","CM.PR.P.TO","CM.PR.R.TO","CMC.TO","CMF.TO","CMG.TO","CMH.TO","CMK.TO","CML.TO","CMP.UN.TO","CMP.WT.A.TO","CMR.TO","CMT.TO","CMW.TO","CMW.A.TO","CMZ.UN.TO","CNH.TO","CNJ.TO","CNM.UN.TO","CNQ.TO","CNR.TO","CNV.UN.TO","COA.TO","COB.TO","COF.TO","COM.TO","COP.TO","COS.UN.TO","COW.TO","COW.A.TO","COX.UN.TO","COX.WT.TO","CP.TO","CPD.TO","CPD.A.TO","CPF.UN.TO","CPG.UN.TO","CPM.UN.TO","CPN.TO","CR.TO","CRA.TO","CRJ.TO","CRP.TO","CRP.WT.TO","CRQ.TO","CRQ.A.TO","CRR.DB.TO","CRR.UN.TO","CRU.TO","CRW.UN.TO","CRY.TO","CS.TO","CSA.TO","CSF.TO","CSH.DB.TO","CSH.DB.A.TO","CSH.UN.TO","CSI.TO","CSM.TO","CSR.UN.TO","CSS.UN.TO","CSU.TO","CTA.TO","CTC.TO","CTC.A.TO","CTD.UN.TO","CTL.TO","CTQ.TO","CTU.A.TO","CTY.TO","CU.TO","CU.PR.A.TO","CU.PR.B.TO","CU.X.TO","CUF.DB.TO","CUF.DB.B.TO","CUF.DB.C.TO","CUF.UN.TO","CUM.TO","CUQ.TO","CUR.TO","CUS.UN.TO","CUX.TO","CVI.A.TO","CVQ.TO","CVT.TO","CWA.UN.TO","CWB.TO","CWB.PR.A.TO","CWB.WT.TO","CWF.TO","CWG.TO","CWI.UN.TO","CWL.A.TO","CWT.DB.A.TO","CWT.UN.TO","CWW.TO","CWX.UN.TO","CX.TO","CXC.TO","CXC.PR.A.TO","CXS.TO","CXX.TO","CYB.TO","CYH.TO","CYM.TO","CZN.TO","CZZ.TO","D.DB.B.TO","D.UN.TO","DA.A.TO","DAV.TO","DAY.DB.B.TO","DAY.DB.C.TO","DAY.UN.TO","DC.A.TO","DC.PR.A.TO","DCD.UN.TO","DCI.UN.TO","DDS.TO","DEE.TO","DEJ.TO","DF.TO","DF.PR.A.TO","DFE.TO","DFI.TO","DFN.TO","DFN.PR.A.TO","DGC.TO","DGD.UN.TO","DGI.UN.TO","DGJ.TO","DGS.TO","DGS.PR.A.TO","DHF.UN.TO","DIF.UN.TO","DII.A.TO","DII.B.TO","DKI.UN.TO","DM.TO","DM.U.TO","DML.TO","DMM.TO","DNG.TO","DNT.TO","DOU.TO","DPF.WT.TO","DPI.UN.TO","DPM.TO","DPM.WT.A.TO","DPS.UN.TO","DR.DB.TO","DR.UN.TO","DRX.TO","DSA.TO","DSC.TO","DSG.TO","DST.UN.TO","DTF.UN.TO","DTN.UN.TO","DTP.UN.TO","DTS.UN.TO","DUR.TO","DVT.TO","DW.TO","DW.PR.A.TO","DWI.TO","DYI.UN.TO","DZR.TO","E.TO","EAT.UN.TO","EBR.TO","ECA.TO","ECU.TO","EDR.TO","EDV.TO","EET.TO","EF.TO","EFH.TO","EFL.TO","EFR.TO","EFX.UN.TO","EG.TO","EGU.TO","EIF.UN.TO","EIS.TO","EIS.DB.TO","EIT.UN.TO","EKO.TO","ELC.TO","ELD.TO","ELF.TO","ELF.PR.G.TO","ELR.TO","EMA.TO","EMP.A.TO","EN.TO","ENB.TO","ENB.PR.A.TO","ENF.UN.TO","ENT.DB.TO","ENT.UN.TO","EP.UN.TO","EPD.UN.TO","EPF.UN.TO","EPP.PR.A.TO","EQN.TO","EQW.UN.TO","ER.TO","ERF.UN.TO","ES.TO","ESI.TO","ESL.TO","ESN.UN.TO","ET.TO","ETC.TO","ETG.TO","EVT.TO","EWP.UN.TO","EWP.WT.TO","EXE.DB.TO","EXE.UN.TO","EXF.TO","EXI.UN.TO","EXN.TO","EXT.TO","FAI.UN.TO","FAN.TO","FAP.TO","FAR.TO","FBS.B.TO","FBS.PR.B.TO","FC.UN.TO","FCC.TO","FCC.NT.A.TO","FCE.UN.TO","FCO.TO","FCR.TO","FCR.DB.A.TO","FCS.PR.A.TO","FEL.TO","FEL.DB.TO","FES.TO","FFH.TO","FFI.UN.TO","FFI.WT.TO","FFN.TO","FGD.TO","FGL.TO","FHT.UN.TO","FIE.TO","FIG.PR.A.TO","FIG.UN.TO","FIU.TO","FIU.DB.TO","FM.TO","FMA.TO","FMD.UN.TO","FMI.TO","FMO.UN.TO","FN.UN.TO","FNI.TO","FNV.TO","FNV.WT.TO","FNX.TO","FOS.TO","FP.UN.TO","FPI.UN.TO","FPR.PR.A.TO","FPS.TO","FR.TO","FR.WT.A.TO","FRA.TO","FRB.TO","FRC.TO","FRE.TO","FRE.WT.TO","FRG.TO","FRU.UN.TO","FSV.TO","FSY.TO","FT.TO","FTF.WT.TO","FTN.TO","FTN.PR.A.TO","FTP.TO","FTS.TO","FTS.PR.C.TO","FTS.PR.E.TO","FTS.PR.F.TO","FTS.PR.G.TO","FTT.TO","FTU.TO","FTU.PR.A.TO","FWM.TO","G.TO","G.WT.G.TO","GAM.TO","GAR.TO","GAS.TO","GAT.UN.TO","GBA.TO","GBA.PR.A.TO","GBG.TO","GBG.WT.TO","GBI.TO","GBP.WT.TO","GBP.WT.A.TO","GBT.A.TO","GBU.TO","GBV.TO","GC.TO","GCE.TO","GCG.A.TO","GDC.TO","GDI.DB.TO","GDI.UN.TO","GDL.TO","GDS.TO","GEO.TO","GFT.UN.TO","GFV.PR.A.TO","GGC.TO","GGN.TO","GH.UN.TO","GHC.TO","GIB.A.TO","GII.UN.TO","GIL.TO","GIN.TO","GIT.TO","GIX.TO","GL.TO","GLA.U.TO","GLG.TO","GLH.UN.TO","GLN.TO","GLS.UN.TO","GLV.A.TO","GLV.B.TO","GMC.TO","GMC.WT.B.TO","GMI.TO","GMO.TO","GMP.UN.TO","GMX.TO","GNA.TO","GND.TO","GNE.TO","GNV.UN.TO","GO.TO","GOL.TO","GPR.TO","GPX.TO","GQM.TO","GRE.UN.TO","GRO.UN.TO","GRZ.TO","GS.TO","GSB.UN.TO","GSC.TO","GSL.TO","GSY.TO","GTE.TO","GTH.TO","GTU.UN.TO","GTX.TO","GUR.TO","GUR.WT.TO","GUY.TO","GVC.TO","GVX.TO","GW.TO","GWE.TO","GWI.TO","GWO.TO","GWO.PR.F.TO","GWO.PR.G.TO","GWO.PR.H.TO","GWO.PR.I.TO","GWO.PR.J.TO","GWO.PR.X.TO","GXP.TO","GZM.UN.TO","HAD.TO","HAE.TO","HAU.TO","HAX.TO","HAY.UN.TO","HAY.WT.TO","HBD.TO","HBM.TO","HBP.TO","HBU.TO","HCG.TO","HCI.UN.TO","HDD.TO","HDU.TO","HE.TO","HED.TO","HEG.TO","HEM.TO","HEQ.UN.TO","HEU.TO","HF.TO","HFD.TO","HFU.TO","HGD.TO","HGU.TO","HIF.TO","HII.A.TO","HII.B.TO","HIX.TO","HJD.TO","HJU.TO","HLB.TO","HLR.DB.TO","HLR.DB.A.TO","HLR.UN.TO","HMD.TO","HMM.A.TO","HMU.TO","HNC.TO","HND.TO","HNL.TO","HNT.DB.C.TO","HNT.UN.TO","HNU.TO","HOC.TO","HOD.TO","HOU.TO","HPS.A.TO","HPX.TO","HQD.TO","HQU.TO","HR.DB.TO","HR.UN.TO","HRG.TO","HRG.WT.TO","HRX.TO","HSB.PR.C.TO","HSB.PR.D.TO","HSD.TO","HSE.TO","HSU.TO","HTD.TO","HTE.DB.B.TO","HTE.DB.D.TO","HTE.DB.E.TO","HTE.DB.F.TO","HTE.DB.G.TO","HTE.UN.TO","HW.TO","HWO.TO","HXD.TO","HXU.TO","HYB.UN.TO","HYD.TO","HYG.TO","HYM.UN.TO","IAG.TO","IAG.PR.A.TO","IAG.PR.C.TO","IAM.TO","IAU.TO","IBG.UN.TO","ICI.TO","ICS.TO","IDC.TO","IDG.TO","IDL.TO","IDX.UN.TO","IE.TO","IE.WT.TO","IEF.UN.TO","IFP.A.TO","IGF.UN.TO","IGM.TO","IGM.PR.A.TO","IGT.TO","IIC.TO","III.TO","IIP.DB.TO","IIP.UN.TO","IM.TO","IMG.TO","IMN.TO","IMO.TO","IMP.TO","IMX.TO","IMZ.TO","INC.UN.TO","INE.TO","INN.DB.A.TO","INN.DB.B.TO","INN.DB.C.TO","INN.UN.TO","INV.TO","IPI.A.TO","IPL.UN.TO","IQ.TO","IQW.TO","IRC.TO","IRT.CL.M.TO","IRT.EE.N.TO","IRT.RT.E.TO","IS.UN.TO","ISA.TO","ISM.TO","ISN.TO","ISR.TO","ITF.TO","ITP.TO","ITT.CL.D.TO","ITT.CL.S.TO","ITT.EE.N.TO","ITT.FF.S.TO","ITT.GG.D.TO","ITT.HH.C.TO","ITT.IP.N.TO","ITT.MM.N.TO","ITT.MM.T.TO","ITT.NT.K.TO","ITT.NT.S.TO","ITT.RT.E.TO","ITT.UN.T.TO","ITX.TO","ITX.DB.V.TO","ITX.EE.C.TO","ITX.EE.Q.TO","ITX.GG.M.TO","ITX.PR.R.TO","IVN.TO","IVW.TO","JAG.TO","JAZ.UN.TO","JDU.TO","JEC.TO","JFC.TO","JIN.TO","JOV.TO","JTV.TO","K.TO","K.WT.B.TO","K.WT.C.TO","KAT.TO","KBL.UN.TO","KCL.TO","KDX.TO","KEG.UN.TO","KEY.UN.TO","KFS.TO","KGI.TO","KGN.TO","KHD.TO","KMP.TO","KNA.TO","KOS.TO","KRI.TO","KRY.TO","KSP.UN.TO","L.TO","L.PR.A.TO","LAM.TO","LAS.A.TO","LB.TO","LB.PR.D.TO","LB.PR.E.TO","LBE.TO","LBS.TO","LBS.PR.A.TO","LCS.TO","LFE.TO","LFE.PR.A.TO","LGG.TO","LGI.TO","LGT.B.TO","LH.TO","LIF.UN.TO","LIQ.DB.TO","LIQ.UN.TO","LIV.UN.TO","LLL.TO","LMA.TO","LMZ.TO","LNF.TO","LNR.TO","LOR.TO","LQW.TO","LRI.TO","LRM.TO","LRR.TO","LRT.UN.TO","LSC.TO","LSC.PR.C.TO","LSG.TO","LUN.TO","LV.TO","LYD.TO","MAG.TO","MAI.TO","MAL.TO","MAR.TO","MAW.TO","MAX.TO","MB.TO","MBT.TO","MBX.TO","MCB.TO","MCZ.TO","MDA.TO","MDF.TO","MDI.TO","MDN.TO","MDS.TO","ME.TO","MEG.UN.TO","MEQ.TO","MEW.UN.TO","MFC.TO","MFC.PR.A.TO","MFC.PR.B.TO","MFC.PR.C.TO","MFC.PR.D.TO","MFI.TO","MFL.TO","MFL.WT.TO","MFT.M.TO","MG.A.TO","MG.DB.TO","MGA.TO","MGA.WT.TO","MGA.WT.A.TO","MGI.TO","MGL.TO","MGO.TO","MGS.UN.TO","MGX.TO","MID.UN.TO","MIM.A.TO","MKP.TO","ML.TO","ML.NT.U.TO","MLG.TO","MLX.TO","MLY.TO","MMM.TO","MMP.UN.TO","MN.TO","MNB.TO","MNF.TO","MNR.TO","MOL.TO","MOX.TO","MPH.TO","MPM.TO","MPT.UN.TO","MPV.TO","MRC.TO","MRD.TO","MRE.TO","MRG.TO","MRT.UN.TO","MRU.A.TO","MS.TO","MSD.TO","MSH.TO","MSI.UN.TO","MST.PR.A.TO","MST.UN.TO","MSV.TO","MSY.TO","MT.TO","MTK.TO","MTL.UN.TO","MTM.TO","MUN.TO","MVG.TO","MVX.TO","MX.TO","MXT.UN.TO","MYT.UN.TO","NA.TO","NA.PR.K.TO","NA.PR.L.TO","NA.PR.M.TO","NA.PR.N.TO","NA.PR.O.TO","NA.PR.P.TO","NAC.TO","NAE.DB.TO","NAE.UN.TO","NAL.DB.TO","NAS.TO","NAU.TO","NBD.TO","NBF.TO","NBF.PR.A.TO","NCS.TO","NCU.TO","NCX.TO","ND.TO","NDM.TO","NDQ.TO","NEM.TO","NFC.TO","NFI.UN.TO","NG.TO","NGD.TO","NGD.NT.TO","NGD.WT.A.TO","NGD.WT.B.TO","NGD.WT.C.TO","NGL.TO","NGX.TO","NHC.TO","NI.TO","NIC.TO","NIF.UN.TO","NII.TO","NKO.TO","NMC.TO","NMN.UN.TO","NNE.A.TO","NOA.TO","NOM.TO","NPC.TO","NPF.DB.TO","NPF.DB.A.TO","NPF.UN.TO","NPI.DB.TO","NPI.UN.TO","NPR.UN.TO","NRG.TO","NRI.TO","NSI.PR.C.TO","NSI.PR.D.TO","NSU.TO","NT.TO","NTI.TO","NTL.PR.F.TO","NTL.PR.G.TO","NUS.TO","NVA.TO","NVN.TO","NVR.TO","NWF.UN.TO","NWI.TO","NXY.TO","NYF.UN.TO","OBP.TO","OCF.TO","OCF.WT.TO","OCX.TO","OEX.TO","OGC.TO","OGE.UN.TO","OGF.UN.TO","OGF.WT.TO","OGN.UN.TO","OGO.A.TO","OLE.TO","ONC.TO","ONE.TO","ONR.TO","ONT.TO","ONY.TO","OPC.TO","OPW.TO","ORA.TO","ORB.TO","ORG.TO","ORI.TO","ORV.TO","OSF.UN.TO","OSI.TO","OSK.TO","OSK.WT.TO","OSM.UN.TO","OSU.TO","OSU.WT.A.TO","OTC.TO","OYM.TO","P.TO","PAA.TO","PAR.TO","PBC.TO","PBG.TO","PBI.UN.TO","PBL.UN.TO","PCA.TO","PCC.TO","PD.UN.TO","PDL.TO","PDL.WT.TO","PDM.DB.TO","PDM.UN.TO","PDN.TO","PDP.TO","PDV.TO","PDV.PR.A.TO","PEF.TO","PEQ.TO","PES.UN.TO","PEY.UN.TO","PEZ.TO","PFB.TO","PFC.TO","PFN.TO","PFR.UN.TO","PFX.TO","PG.TO","PGD.TO","PGF.DB.TO","PGF.UN.TO","PGT.UN.TO","PHC.TO","PHC.WT.TO","PHD.TO","PHX.UN.TO","PIC.A.TO","PIC.PR.A.TO","PIF.DB.B.TO","PIF.UN.TO","PIH.TO","PIX.TO","PJC.A.TO","PKI.UN.TO","PKL.TO","PLB.TO","PLG.TO","PLI.TO","PLS.TO","PMD.TO","PME.TO","PMG.TO","PMT.DB.A.TO","PMT.DB.B.TO","PMT.DB.C.TO","PMT.UN.TO","PMZ.DB.A.TO","PMZ.UN.TO","PNG.TO","PNP.TO","PNP.WT.A.TO","POM.TO","POT.TO","POU.TO","POW.TO","POW.PR.A.TO","POW.PR.B.TO","POW.PR.C.TO","POW.PR.D.TO","PPL.TO","PPL.PR.A.TO","PPN.TO","PPX.TO","PRE.TO","PRE.DB.TO","PRE.WT.TO","PRF.PR.A.TO","PRG.UN.TO","PRI.UN.TO","PRK.TO","PRP.TO","PRP.WT.TO","PRQ.TO","PRT.UN.TO","PRW.UN.TO","PRX.TO","PSD.TO","PSI.TO","PSV.TO","PSX.TO","PTI.TO","PTM.TO","PTQ.TO","PTS.TO","PTZ.TO","PVE.DB.B.TO","PVE.DB.C.TO","PVE.DB.D.TO","PVE.UN.TO","PVN.UN.TO","PWC.TO","PWE.TO","PWF.TO","PWF.PR.D.TO","PWF.PR.E.TO","PWF.PR.F.TO","PWF.PR.G.TO","PWF.PR.H.TO","PWF.PR.I.TO","PWF.PR.J.TO","PWF.PR.K.TO","PWF.PR.L.TO","PWF.PR.M.TO","PWT.DB.F.TO","PWT.UN.TO","PXX.TO","PZA.UN.TO","PZG.TO","QAR.TO","QBR.A.TO","QBR.B.TO","QC.TO","QEC.TO","QLT.TO","QMI.TO","QSR.UN.TO","QUA.TO","QUA.WT.TO","RBA.TO","RBI.TO","RBM.TO","RBO.UN.TO","RBS.TO","RBS.PR.A.TO","RBT.TO","RC.TO","RCH.TO","RCI.A.TO","RCI.B.TO","RCL.TO","RCM.TO","RDI.TO","RDL.TO","RDV.TO","RE.TO","REF.UN.TO","REI.UN.TO","REK.TO","RET.TO","RET.A.TO","RF.A.TO","RF.PR.A.TO","RGL.TO","RIC.TO","RIG.UN.TO","RIM.TO","RIT.UN.TO","RIT.WT.TO","RME.TO","RMM.DB.TO","RMM.UN.TO","RMX.TO","RNK.TO","RNO.TO","RON.TO","RPA.PR.A.TO","RPB.PR.A.TO","RPI.UN.TO","RS.TO","RSC.TO","RSI.DB.A.TO","RSI.DB.B.TO","RSI.UN.TO","RTU.UN.TO","RUS.TO","RUT.TO","RVM.TO","RVR.TO","RVX.TO","RY.TO","RY.NO.M.TO","RY.NO.O.TO","RY.NO.PR..TO","RY.NT.A.TO","RY.NT.T.TO","RY.NT.U.TO","RY.PR.A.TO","RY.PR.B.TO","RY.PR.C.TO","RY.PR.D.TO","RY.PR.E.TO","RY.PR.F.TO","RY.PR.G.TO","RY.PR.H.TO","RY.PR.I.TO","RY.PR.L.TO","RY.PR.N.TO","RY.PR.P.TO","RY.PR.R.TO","RY.PR.T.TO","RY.PR.W.TO","RYL.DB.B.TO","RYL.DB.D.TO","RYL.UN.TO","RYT.NT.M.TO","RYT.NT.PR..TO","S.TO","SAB.TO","SAG.TO","SAM.TO","SAP.TO","SAS.TO","SAX.TO","SBC.TO","SBC.PR.A.TO","SBN.TO","SBN.PR.A.TO","SBR.TO","SBS.TO","SC.TO","SCC.TO","SCI.UN.TO","SCL.A.TO","SCO.UN.TO","SCP.TO","SCR.TO","SCU.UN.TO","SDC.TO","SDG.UN.TO","SDI.TO","SDL.UN.TO","SDT.UN.TO","SEA.TO","SEG.TO","SEO.TO","SFG.UN.TO","SFK.DB.TO","SFK.UN.TO","SG.UN.TO","SGF.TO","SGT.UN.TO","SGV.TO","SI.TO","SIF.UN.TO","SII.TO","SIM.TO","SIN.UN.TO","SJ.TO","SJR.B.TO","SKG.UN.TO","SLE.M.TO","SLF.TO","SLF.PR.A.TO","SLF.PR.B.TO","SLF.PR.C.TO","SLF.PR.D.TO","SLF.PR.E.TO","SLS.TO","SLW.TO","SLW.WT.TO","SLW.WT.B.TO","SLW.WT.U.TO","SMF.TO","SMG.TO","SNC.TO","SNG.TO","SNP.U.TO","SO.TO","SOM.UN.TO","SON.UN.TO","SOY.TO","SPB.TO","SPM.TO","SPO.UN.TO","SPT.A.TO","SPT.B.TO","SPU.UN.TO","SQP.UN.TO","SRC.UN.TO","SRF.TO","SRQ.UN.TO","SRU.TO","SRV.UN.TO","SRY.TO","SSI.UN.TO","SSO.TO","STB.TO","STB.UN.TO","STN.TO","STQ.E.TO","STR.E.TO","STW.UN.TO","STZ.UN.TO","SU.TO","SUE.TO","SVC.TO","SVM.TO","SVU.TO","SVY.TO","SW.TO","SWG.TO","SWS.UN.TO","SWY.TO","SXC.TO","SXP.UN.TO","SXT.TO","SZ.TO","T.TO","T.A.TO","TA.TO","TAP.B.TO","TBE.TO","TBL.TO","TBL.RT.TO","TCA.PR.X.TO","TCA.PR.Y.TO","TCK.A.TO","TCK.B.TO","TCL.A.TO","TCM.TO","TCM.WT.TO","TCS.TO","TCT.UN.TO","TCW.TO","TD.TO","TD.PR.A.TO","TD.PR.C.TO","TD.PR.E.TO","TD.PR.G.TO","TD.PR.I.TO","TD.PR.M.TO","TD.PR.N.TO","TD.PR.O.TO","TD.PR.P.TO","TD.PR.Q.TO","TD.PR.R.TO","TD.PR.S.TO","TD.PR.Y.TO","TDD.M.TO","TDG.TO","TDG.DB.TO","TDR.TO","TDS.B.TO","TEC.TO","TET.UN.TO","TFI.TO","TFL.TO","TGL.TO","TGO.TO","TH.TO","THD.TO","THI.TO","TI.UN.TO","TIH.TO","TIL.UN.TO","TIM.TO","TIO.TO","TKO.TO","TLC.TO","TLM.TO","TLN.TO","TMA.UN.TO","TMB.TO","TMB.WT.TO","TMC.TO","TML.TO","TNP.TO","TNX.TO","TO.A.TO","TO.UN.TO","TOG.TO","TOS.TO","TOT.UN.TO","TPL.TO","TPS.TO","TPX.B.TO","TRE.TO","TRF.UN.TO","TRH.UN.TO","TRI.TO","TRP.TO","TRT.TO","TRY.TO","TRZ.A.TO","TRZ.B.TO","TS.B.TO","TSF.UN.TO","TSK.TO","TTH.TO","TUI.DB.TO","TUI.UN.TO","TUN.TO","TVA.B.TO","TVI.TO","TWF.UN.TO","TWH.TO","TXT.PR.A.TO","TXT.UN.TO","TZT.TO","U.TO","UEG.TO","UEX.TO","UF.UN.TO","UFS.TO","UFX.TO","UNC.TO","UNS.TO","URB.A.TO","URE.TO","UST.PR.A.TO","UST.UN.TO","UTC.C.TO","UTS.TO","UUU.TO","UUU.DB.TO","UXE.TO","UXG.TO","UXG.WT.TO","VAA.TO","VAS.TO","VCM.TO","VEM.TO","VEN.TO","VET.UN.TO","VGM.TO","VGQ.TO","VGZ.TO","VHB.TO","VIC.UN.TO","VIP.PR.A.TO","VIP.UN.TO","VIP.WT.TO","VLN.TO","VNP.TO","VNX.TO","VRO.TO","VRS.TO","VRS.RT.TO","VT.TO","VTN.TO","VTR.TO","W.PR.H.TO","W.PR.J.TO","WAV.TO","WCS.A.TO","WDO.TO","WED.TO","WEF.TO","WEQ.UN.TO","WES.TO","WEW.TO","WFC.TO","WFI.TO","WFS.TO","WFS.PR.A.TO","WFT.TO","WG.TO","WGI.TO","WIN.TO","WIX.TO","WJA.TO","WJA.A.TO","WJX.UN.TO","WM.TO","WN.TO","WN.PR.A.TO","WN.PR.B.TO","WN.PR.C.TO","WN.PR.D.TO","WN.PR.E.TO","WNX.TO","WPK.TO","WPO.TO","WPT.TO","WRK.DB.A.TO","WRK.DB.E.TO","WRK.UN.TO","WRN.TO","WRX.TO","WTE.UN.TO","WTL.TO","WTM.TO","WTN.TO","WWW.TO","WXX.TO","WZL.TO","X.TO","XAL.TO","XAU.TO","XBB.TO","XCB.TO","XCG.TO","XCM.TO","XCM.PR.A.TO","XCR.TO","XCS.TO","XCV.TO","XDC.TO","XDV.TO","XEG.TO","XEN.TO","XFN.TO","XGB.TO","XGC.TO","XGD.TO","XGR.TO","XHM.A.TO","XIC.TO","XIN.TO","XIT.TO","XIU.TO","XLB.TO","XMA.TO","XMC.TO","XMD.TO","XMF.TO","XMF.PR.A.TO","XRB.TO","XRE.TO","XSB.TO","XSP.TO","XSU.TO","XTC.TO","XTD.TO","XTD.PR.A.TO","XTR.TO","XWE.TO","YGA.TO","YK.TO","YLD.PR.B.TO","YLO.UN.TO","YM.TO","YNG.TO","YOU.UN.TO","YP.UN.TO","YPG.DB.TO","YPG.PR.A.TO","YPG.PR.B.TO","YRB.A.TO","YRI.TO","YRI.WT.C.TO","ZAR.UN.TO","ZAZ.TO","ZCL.TO","ZIC.TO","ZL.TO","ZL.PR.A.TO","ZMR.TO","ZNC.TO","ZPP.TO");
 */
$cie = array("AAB.TO","AAH.TO","ABT.TO","ABX.TO","AC.A.TO","AC.B.TO","ACC.TO","ACD.TO");
 

	return $cie;
	}
}
?>

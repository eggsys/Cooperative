SELECT ord.c_order_id

,ord.documentno
,ORDL.m_product_id
,ORDL.linetotalamt
,Mpro.name AS Mpro_name
,BP.C_BPartner_id
,BP.name AS BP_Name
,ord.Duedate
,ord.DateAcct
--,count(ORDL.m_product_id)
,ord.issotrx


FROM C_Order ord 
LEFT JOIN C_OrderLine ORDL ON ord.C_Order_ID = ORDL.C_Order_ID
INNER JOIN C_BPartner BP ON ord.C_BPartner_id  = BP.C_BPartner_id 
LEFT JOIN M_Product Mpro ON ORDL.m_product_id = Mpro.m_product_id
where ord.C_Order_ID=1005528 AND 





---------------------------------------------------------------------------------------------------------
SELECT 


 ord.dateordered
--ord.c_order_id
,ord.documentno
--,ORDL.m_product_id
--,ORDL.linetotalamt

--,Mpro.name AS Mpro_name
--,BP.C_BPartner_id
,BP.name AS BP_Name
--,ord.Duedate
--,ord.DateAcct
--,count(ORDL.m_product_id)

--,ord.issotrx

,PayT.name AS Pay_name
,ord.grandtotal
--,Invl.c_orderline_id
--,Inv.c_invoice_id
,Inv.documentno AS Inv_Docno

,Bil.documentno AS Bil_Docno
--,PayAll.c_payment_id 
,PayM.documentno AS PayM_Docno
,ord.c_order_id



FROM C_Order ord 
LEFT JOIN C_OrderLine ORDL ON ord.C_Order_ID = ORDL.C_Order_ID
LEFT JOIN C_BPartner BP ON ord.C_BPartner_id  = BP.C_BPartner_id 
--LEFT JOIN M_Product Mpro ON ORDL.m_product_id = Mpro.m_product_id
LEFT JOIN C_Invoiceline Invl ON ORDL.c_orderline_id = Invl.c_orderline_id
LEFT JOIN C_Invoice Inv ON Invl.c_invoice_id = Inv.c_invoice_id
LEFT JOIN C_paymentTerm PayT ON ord.c_paymentterm_id = PayT.c_paymentterm_id
LEFT JOIN C_Billing_line Bili ON Inv.c_invoice_id = Bili.c_invoice_id
LEFT JOIN C_Billing Bil ON Bili.C_billing_id = Bil.C_billing_id 
LEFT JOIN C_PaymentAllocate PayAll ON Inv.c_invoice_id = PayAll.c_invoice_id
LEFT JOIN C_Payment PayM ON PayAll.C_payment_id = PayM.C_payment_id

where 
ord.dateordered between '2018-01-01' AND '2019-12-31'
AND
ord.issotrx='Y' 
group by ord.dateordered , ord.documentno , BP.name,PayT.name ,ord.grandtotal ,Inv.documentno ,Bil.documentno,PayM.documentno ,ord.c_order_id
-----------------------------------------------------------------------------------------------------------

-- |||♥ |Inovice Line| ♥ ----


select *
from C_InvoiceLine

-- |||♥ |Inovice Line| ♥ ----


select *
from c_invoice


-- |||♥ |C_Order_Line| ♥ ----


select *
from  C_OrderLine






-------------------------------------------------------------------------------------------------------


M_Product m_pro ON C_Order.M_Product_ID = m_pro.M_Product_ID



select c_order_id, documentno,C_BPartner_id,
from C_order 
where C_Order_ID=1005512



union


SELECT c_order_id, m_product_id,linetotalamt,
from C_OrderLine 
where C_OrderLine_ID=1017830

union

select m_product_id,name,*
from M_Product 
where M_Product_ID=1026788




select *  
from C_BPartner 
where C_BPartner_id = 1039056

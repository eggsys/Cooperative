select *
from C_InvoiceLine

select * 
from C_invoice
where documentno ='RS6212-0004' AND C_PaymentTerm_ID=1000555

select name ,C_PaymentTerm_ID,* 
from C_PaymentTerm 
where C_PaymentTerm_ID=1000555


select C_billing_id,* 
from C_billing
where C_billing_id= 1003456

select *
from C_Billing_Line 
where C_Billing_Line_ID=1006942


select c_payment_id,documentno
from  C_Payment 
where C_Payment_ID=1013745

select c_invoice_id , c_payment_id 
from C_PaymentAllocate 
where C_PaymentAllocate_ID=1014497

select *
from c_order
where C_Order_ID=1005529
  function _date($date){
         $date = date("l  j  F  Y", strtotime($date));
        //// days ///
        $date = str_replace('Thursday', 'الخميس', $date);
        $date = str_replace('Friday', 'الجمعة', $date);
        $date = str_replace('Saturday', 'السبت', $date);
        $date = str_replace('Sunday', 'الأحد', $date);
        $date = str_replace('Monday', 'الإثنين', $date);
        $date = str_replace('Tuesday', 'الثلاثاء', $date);
        $date = str_replace('Wednesday', 'الأربعاء', $date);
        //// months ///
        $date = str_replace('September', 'أيلول', $date);
        $date = str_replace('October', 'تشرين الأول', $date);
        $date = str_replace('November', 'تشرين الثاني', $date);
        $date = str_replace('December', 'كانون لأول', $date);
        $date = str_replace('January', 'كانون الثاني', $date);
        $date = str_replace('February', 'شباط', $date);
        $date = str_replace('March', 'آذار', $date);
        $date = str_replace('April', 'نيسان', $date);
        $date = str_replace('May', 'أيار', $date);
        $date = str_replace('June', 'حزيران', $date);
        $date = str_replace('July', 'تموز', $date);
        $date = str_replace('August', 'آب', $date);
        
        return $date;
    }

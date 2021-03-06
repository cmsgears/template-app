<?php
// Common resources required by Applications
Yii::setAlias( '@common', dirname( __DIR__ ) );
Yii::setAlias( '@themes', dirname( dirname( __DIR__ ) ) . '/themes' );
Yii::setAlias( '@widgets', dirname( dirname( __DIR__ ) ) . '/widgets' );
Yii::setAlias( '@templates', dirname( dirname( __DIR__ ) ) . '/templates' );
Yii::setAlias( '@uploads', dirname( dirname( __DIR__ ) ) . '/uploads' );

// Applications
Yii::setAlias( '@console', dirname( dirname( __DIR__ ) ) . '/console' );
Yii::setAlias( '@frontend', dirname( dirname( __DIR__ ) ) . '/frontend' );

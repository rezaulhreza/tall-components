Install laravel/notification channels message bird package

```bash
   “laravel-notification-channels/messagebird”: “^3.0”
   ```
 
 Set up your environment variables.
 
 
 To test the 
 
 In your phpunit.xml file put the below line
 
 ```bash
  <env name=“MESSAGEBIRD_TEST_RECIPIENT” value=“+447000000000” />
   ```
   
   In your Test Use Notification::fake() at the top of your test or in the setup.
   
   After performing the action perform the assertion.
   
   ```php
   function test_order_notification_is_sent()
    {
    
      protected function setUp(): void
    {
        parent::setUp();

        // Make sure we don’t send real SMS texts
        Notification::fake();
    }

        Livewire::actingAs($user)
            ->test(TestComponent::class)
           
            ->set(‘property ’, ‘property value)
      
            ->call(‘method’);

     

        Notification::assertSentTo(
            new AnonymousNotifiable(),
            MessageCreated::class,
            function ($notification, $channels, $notifiable) {
                return $notifiable->routes[‘messagebird’] === ‘+447000000000’;
            }
        );
    }
   
   ```
   
   It is important that you have to open an account with MessageBird. For more information please see MessageBird documentation.
 
 
   

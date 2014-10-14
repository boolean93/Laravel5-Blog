<?php
/**
 * An helper file for Laravel 4, to provide autocomplete information to your IDE
 * Generated for Laravel 5.0-dev on 2014-10-13.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 * @see https://github.com/barryvdh/laravel-ide-helper
 */

namespace {
    exit("This file should not be included, only analyzed by your IDE");

    class App extends \Illuminate\Support\Facades\App{
        
        /**
         * 
         *
         * @static 
         */
        public static function bindInstallPaths($paths){
            return \Illuminate\Foundation\Application::bindInstallPaths($paths);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getBootstrapFile(){
            return \Illuminate\Foundation\Application::getBootstrapFile();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function startExceptionHandling(){
            return \Illuminate\Foundation\Application::startExceptionHandling();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function environment(){
            return \Illuminate\Foundation\Application::environment();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function isLocal(){
            return \Illuminate\Foundation\Application::isLocal();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function detectEnvironment($envs){
            return \Illuminate\Foundation\Application::detectEnvironment($envs);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function runningInConsole(){
            return \Illuminate\Foundation\Application::runningInConsole();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function runningUnitTests(){
            return \Illuminate\Foundation\Application::runningUnitTests();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function forceRegister($provider, $options = array()){
            return \Illuminate\Foundation\Application::forceRegister($provider, $options);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function register($provider, $options = array(), $force = false){
            return \Illuminate\Foundation\Application::register($provider, $options, $force);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getRegistered($provider){
            return \Illuminate\Foundation\Application::getRegistered($provider);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function resolveProviderClass($provider){
            return \Illuminate\Foundation\Application::resolveProviderClass($provider);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function loadDeferredProviders(){
            return \Illuminate\Foundation\Application::loadDeferredProviders();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function registerDeferredProvider($provider, $service = null){
            return \Illuminate\Foundation\Application::registerDeferredProvider($provider, $service);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function make($abstract, $parameters = array()){
            return \Illuminate\Foundation\Application::make($abstract, $parameters);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function bound($abstract){
            return \Illuminate\Foundation\Application::bound($abstract);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function extend($abstract, $closure){
            return \Illuminate\Foundation\Application::extend($abstract, $closure);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function finish($callback){
            return \Illuminate\Foundation\Application::finish($callback);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function shutdown($callback = null){
            return \Illuminate\Foundation\Application::shutdown($callback);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function useArraySessions($callback){
            return \Illuminate\Foundation\Application::useArraySessions($callback);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function isBooted(){
            return \Illuminate\Foundation\Application::isBooted();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function boot(){
            return \Illuminate\Foundation\Application::boot();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function booting($callback){
            return \Illuminate\Foundation\Application::booting($callback);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function booted($callback){
            return \Illuminate\Foundation\Application::booted($callback);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function routesAreCached(){
            return \Illuminate\Foundation\Application::routesAreCached();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getCachedRoutesPath(){
            return \Illuminate\Foundation\Application::getCachedRoutesPath();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function routesAreScanned(){
            return \Illuminate\Foundation\Application::routesAreScanned();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getScannedRoutesPath(){
            return \Illuminate\Foundation\Application::getScannedRoutesPath();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function eventsAreScanned(){
            return \Illuminate\Foundation\Application::eventsAreScanned();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getScannedEventsPath(){
            return \Illuminate\Foundation\Application::getScannedEventsPath();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function stack($stack){
            return \Illuminate\Foundation\Application::stack($stack);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function run($request = null){
            return \Illuminate\Foundation\Application::run($request);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function handle($request, $type = 1, $catch = true){
            return \Illuminate\Foundation\Application::handle($request, $type, $catch);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function dispatch($request){
            return \Illuminate\Foundation\Application::dispatch($request);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function terminate($request, $response){
            return \Illuminate\Foundation\Application::terminate($request, $response);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function callFinishCallbacks($request, $response){
            return \Illuminate\Foundation\Application::callFinishCallbacks($request, $response);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function prepareRequest($request){
            return \Illuminate\Foundation\Application::prepareRequest($request);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function prepareResponse($value){
            return \Illuminate\Foundation\Application::prepareResponse($value);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function readyForResponses(){
            return \Illuminate\Foundation\Application::readyForResponses();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function isDownForMaintenance(){
            return \Illuminate\Foundation\Application::isDownForMaintenance();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function down($callback){
            return \Illuminate\Foundation\Application::down($callback);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function abort($code, $message = '', $headers = array()){
            return \Illuminate\Foundation\Application::abort($code, $message, $headers);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getConfigLoader(){
            return \Illuminate\Foundation\Application::getConfigLoader();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getProviderRepository(){
            return \Illuminate\Foundation\Application::getProviderRepository();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getLoadedProviders(){
            return \Illuminate\Foundation\Application::getLoadedProviders();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setDeferredServices($services){
            return \Illuminate\Foundation\Application::setDeferredServices($services);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function isDeferredService($service){
            return \Illuminate\Foundation\Application::isDeferredService($service);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function requestClass($class = null){
            return \Illuminate\Foundation\Application::requestClass($class);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setRequestForConsoleEnvironment(){
            return \Illuminate\Foundation\Application::setRequestForConsoleEnvironment();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function onRequest($method, $parameters = array()){
            return \Illuminate\Foundation\Application::onRequest($method, $parameters);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getLocale(){
            return \Illuminate\Foundation\Application::getLocale();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setLocale($locale){
            return \Illuminate\Foundation\Application::setLocale($locale);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function registerCoreContainerAliases(){
            return \Illuminate\Foundation\Application::registerCoreContainerAliases();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function flush(){
            return \Illuminate\Foundation\Application::flush();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function when($concrete){
            //Method inherited from \Illuminate\Container\Container            
            return \Illuminate\Foundation\Application::when($concrete);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function resolved($abstract){
            //Method inherited from \Illuminate\Container\Container            
            return \Illuminate\Foundation\Application::resolved($abstract);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function isAlias($name){
            //Method inherited from \Illuminate\Container\Container            
            return \Illuminate\Foundation\Application::isAlias($name);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function bind($abstract, $concrete = null, $shared = false){
            //Method inherited from \Illuminate\Container\Container            
            return \Illuminate\Foundation\Application::bind($abstract, $concrete, $shared);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function addContextualBinding($concrete, $abstract, $implementation){
            //Method inherited from \Illuminate\Container\Container            
            return \Illuminate\Foundation\Application::addContextualBinding($concrete, $abstract, $implementation);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function bindIf($abstract, $concrete = null, $shared = false){
            //Method inherited from \Illuminate\Container\Container            
            return \Illuminate\Foundation\Application::bindIf($abstract, $concrete, $shared);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function singleton($abstract, $concrete = null){
            //Method inherited from \Illuminate\Container\Container            
            return \Illuminate\Foundation\Application::singleton($abstract, $concrete);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function share($closure){
            //Method inherited from \Illuminate\Container\Container            
            return \Illuminate\Foundation\Application::share($closure);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function bindShared($abstract, $closure){
            //Method inherited from \Illuminate\Container\Container            
            return \Illuminate\Foundation\Application::bindShared($abstract, $closure);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function instance($abstract, $instance){
            //Method inherited from \Illuminate\Container\Container            
            return \Illuminate\Foundation\Application::instance($abstract, $instance);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function tag($abstracts, $tags){
            //Method inherited from \Illuminate\Container\Container            
            return \Illuminate\Foundation\Application::tag($abstracts, $tags);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function tagged($tag){
            //Method inherited from \Illuminate\Container\Container            
            return \Illuminate\Foundation\Application::tagged($tag);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function alias($abstract, $alias){
            //Method inherited from \Illuminate\Container\Container            
            return \Illuminate\Foundation\Application::alias($abstract, $alias);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function rebinding($abstract, $callback){
            //Method inherited from \Illuminate\Container\Container            
            return \Illuminate\Foundation\Application::rebinding($abstract, $callback);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function refresh($abstract, $target, $method){
            //Method inherited from \Illuminate\Container\Container            
            return \Illuminate\Foundation\Application::refresh($abstract, $target, $method);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function wrap($callback, $parameters = array()){
            //Method inherited from \Illuminate\Container\Container            
            return \Illuminate\Foundation\Application::wrap($callback, $parameters);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function call($callback, $parameters = array(), $defaultMethod = null){
            //Method inherited from \Illuminate\Container\Container            
            return \Illuminate\Foundation\Application::call($callback, $parameters, $defaultMethod);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function build($concrete, $parameters = array()){
            //Method inherited from \Illuminate\Container\Container            
            return \Illuminate\Foundation\Application::build($concrete, $parameters);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function resolving($abstract, $callback){
            //Method inherited from \Illuminate\Container\Container            
            return \Illuminate\Foundation\Application::resolving($abstract, $callback);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function resolvingAny($callback){
            //Method inherited from \Illuminate\Container\Container            
            return \Illuminate\Foundation\Application::resolvingAny($callback);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function afterResolvingAny($callback){
            //Method inherited from \Illuminate\Container\Container            
            return \Illuminate\Foundation\Application::afterResolvingAny($callback);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function isShared($abstract){
            //Method inherited from \Illuminate\Container\Container            
            return \Illuminate\Foundation\Application::isShared($abstract);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getBindings(){
            //Method inherited from \Illuminate\Container\Container            
            return \Illuminate\Foundation\Application::getBindings();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function forgetInstance($abstract){
            //Method inherited from \Illuminate\Container\Container            
            return \Illuminate\Foundation\Application::forgetInstance($abstract);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function forgetInstances(){
            //Method inherited from \Illuminate\Container\Container            
            return \Illuminate\Foundation\Application::forgetInstances();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function offsetExists($key){
            //Method inherited from \Illuminate\Container\Container            
            return \Illuminate\Foundation\Application::offsetExists($key);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function offsetGet($key){
            //Method inherited from \Illuminate\Container\Container            
            return \Illuminate\Foundation\Application::offsetGet($key);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function offsetSet($key, $value){
            //Method inherited from \Illuminate\Container\Container            
            return \Illuminate\Foundation\Application::offsetSet($key, $value);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function offsetUnset($key){
            //Method inherited from \Illuminate\Container\Container            
            return \Illuminate\Foundation\Application::offsetUnset($key);
        }
        
    }


    class Artisan extends \Illuminate\Support\Facades\Artisan{
        
        /**
         * Create and boot a new Console application.
         *
         * @param \Illuminate\Foundation\Application $app
         * @return \Illuminate\Console\Application 
         * @static 
         */
        public static function start($app){
            return \Illuminate\Console\Application::start($app);
        }
        
        /**
         * Create a new Console application.
         *
         * @param \Illuminate\Foundation\Application $app
         * @return \Illuminate\Console\Application 
         * @static 
         */
        public static function make($app){
            return \Illuminate\Console\Application::make($app);
        }
        
        /**
         * Boot the Console application.
         *
         * @return $this 
         * @static 
         */
        public static function boot(){
            return \Illuminate\Console\Application::boot();
        }
        
        /**
         * Run an Artisan console command by name.
         *
         * @param string $command
         * @param array $parameters
         * @return int 
         * @static 
         */
        public static function call($command, $parameters = array()){
            return \Illuminate\Console\Application::call($command, $parameters);
        }
        
        /**
         * Get the output for the last run command.
         *
         * @return string 
         * @static 
         */
        public static function output(){
            return \Illuminate\Console\Application::output();
        }
        
        /**
         * Add a command to the console.
         *
         * @param \Symfony\Component\Console\Command\Command $command
         * @return \Symfony\Component\Console\Command\Command 
         * @static 
         */
        public static function add($command){
            return \Illuminate\Console\Application::add($command);
        }
        
        /**
         * Add a command, resolving through the application.
         *
         * @param string $command
         * @return \Symfony\Component\Console\Command\Command 
         * @static 
         */
        public static function resolve($command){
            return \Illuminate\Console\Application::resolve($command);
        }
        
        /**
         * Resolve an array of commands through the application.
         *
         * @param array|mixed $commands
         * @return void 
         * @static 
         */
        public static function resolveCommands($commands){
            \Illuminate\Console\Application::resolveCommands($commands);
        }
        
        /**
         * Render the given exception.
         *
         * @param \Exception $e
         * @param \Symfony\Component\Console\Output\OutputInterface $output
         * @return void 
         * @static 
         */
        public static function renderException($e, $output){
            \Illuminate\Console\Application::renderException($e, $output);
        }
        
        /**
         * Set the exception handler instance.
         *
         * @param \Illuminate\Exception\Handler $handler
         * @return $this 
         * @static 
         */
        public static function setExceptionHandler($handler){
            return \Illuminate\Console\Application::setExceptionHandler($handler);
        }
        
        /**
         * Set the Laravel application instance.
         *
         * @param \Illuminate\Foundation\Application $laravel
         * @return $this 
         * @static 
         */
        public static function setLaravel($laravel){
            return \Illuminate\Console\Application::setLaravel($laravel);
        }
        
        /**
         * Set whether the Console app should auto-exit when done.
         *
         * @param bool $boolean
         * @return $this 
         * @static 
         */
        public static function setAutoExit($boolean){
            return \Illuminate\Console\Application::setAutoExit($boolean);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setDispatcher($dispatcher){
            //Method inherited from \Symfony\Component\Console\Application            
            return \Illuminate\Console\Application::setDispatcher($dispatcher);
        }
        
        /**
         * Runs the current application.
         *
         * @param \Symfony\Component\Console\InputInterface $input An Input instance
         * @param \Symfony\Component\Console\OutputInterface $output An Output instance
         * @return int 0 if everything went fine, or an error code
         * @throws \Exception When doRun returns Exception
         * @api 
         * @static 
         */
        public static function run($input = null, $output = null){
            //Method inherited from \Symfony\Component\Console\Application            
            return \Illuminate\Console\Application::run($input, $output);
        }
        
        /**
         * Runs the current application.
         *
         * @param \Symfony\Component\Console\InputInterface $input An Input instance
         * @param \Symfony\Component\Console\OutputInterface $output An Output instance
         * @return int 0 if everything went fine, or an error code
         * @static 
         */
        public static function doRun($input, $output){
            //Method inherited from \Symfony\Component\Console\Application            
            return \Illuminate\Console\Application::doRun($input, $output);
        }
        
        /**
         * Set a helper set to be used with the command.
         *
         * @param \Symfony\Component\Console\HelperSet $helperSet The helper set
         * @api 
         * @static 
         */
        public static function setHelperSet($helperSet){
            //Method inherited from \Symfony\Component\Console\Application            
            return \Illuminate\Console\Application::setHelperSet($helperSet);
        }
        
        /**
         * Get the helper set associated with the command.
         *
         * @return \Symfony\Component\Console\HelperSet The HelperSet instance associated with this command
         * @api 
         * @static 
         */
        public static function getHelperSet(){
            //Method inherited from \Symfony\Component\Console\Application            
            return \Illuminate\Console\Application::getHelperSet();
        }
        
        /**
         * Set an input definition set to be used with this application
         *
         * @param \Symfony\Component\Console\InputDefinition $definition The input definition
         * @api 
         * @static 
         */
        public static function setDefinition($definition){
            //Method inherited from \Symfony\Component\Console\Application            
            return \Illuminate\Console\Application::setDefinition($definition);
        }
        
        /**
         * Gets the InputDefinition related to this Application.
         *
         * @return \Symfony\Component\Console\InputDefinition The InputDefinition instance
         * @static 
         */
        public static function getDefinition(){
            //Method inherited from \Symfony\Component\Console\Application            
            return \Illuminate\Console\Application::getDefinition();
        }
        
        /**
         * Gets the help message.
         *
         * @return string A help message.
         * @static 
         */
        public static function getHelp(){
            //Method inherited from \Symfony\Component\Console\Application            
            return \Illuminate\Console\Application::getHelp();
        }
        
        /**
         * Sets whether to catch exceptions or not during commands execution.
         *
         * @param bool $boolean Whether to catch exceptions or not during commands execution
         * @api 
         * @static 
         */
        public static function setCatchExceptions($boolean){
            //Method inherited from \Symfony\Component\Console\Application            
            return \Illuminate\Console\Application::setCatchExceptions($boolean);
        }
        
        /**
         * Gets the name of the application.
         *
         * @return string The application name
         * @api 
         * @static 
         */
        public static function getName(){
            //Method inherited from \Symfony\Component\Console\Application            
            return \Illuminate\Console\Application::getName();
        }
        
        /**
         * Sets the application name.
         *
         * @param string $name The application name
         * @api 
         * @static 
         */
        public static function setName($name){
            //Method inherited from \Symfony\Component\Console\Application            
            return \Illuminate\Console\Application::setName($name);
        }
        
        /**
         * Gets the application version.
         *
         * @return string The application version
         * @api 
         * @static 
         */
        public static function getVersion(){
            //Method inherited from \Symfony\Component\Console\Application            
            return \Illuminate\Console\Application::getVersion();
        }
        
        /**
         * Sets the application version.
         *
         * @param string $version The application version
         * @api 
         * @static 
         */
        public static function setVersion($version){
            //Method inherited from \Symfony\Component\Console\Application            
            return \Illuminate\Console\Application::setVersion($version);
        }
        
        /**
         * Returns the long version of the application.
         *
         * @return string The long application version
         * @api 
         * @static 
         */
        public static function getLongVersion(){
            //Method inherited from \Symfony\Component\Console\Application            
            return \Illuminate\Console\Application::getLongVersion();
        }
        
        /**
         * Registers a new command.
         *
         * @param string $name The command name
         * @return \Symfony\Component\Console\Command The newly created command
         * @api 
         * @static 
         */
        public static function register($name){
            //Method inherited from \Symfony\Component\Console\Application            
            return \Illuminate\Console\Application::register($name);
        }
        
        /**
         * Adds an array of command objects.
         *
         * @param \Symfony\Component\Console\Command[] $commands An array of commands
         * @api 
         * @static 
         */
        public static function addCommands($commands){
            //Method inherited from \Symfony\Component\Console\Application            
            return \Illuminate\Console\Application::addCommands($commands);
        }
        
        /**
         * Returns a registered command by name or alias.
         *
         * @param string $name The command name or alias
         * @return \Symfony\Component\Console\Command A Command object
         * @throws \InvalidArgumentException When command name given does not exist
         * @api 
         * @static 
         */
        public static function get($name){
            //Method inherited from \Symfony\Component\Console\Application            
            return \Illuminate\Console\Application::get($name);
        }
        
        /**
         * Returns true if the command exists, false otherwise.
         *
         * @param string $name The command name or alias
         * @return bool true if the command exists, false otherwise
         * @api 
         * @static 
         */
        public static function has($name){
            //Method inherited from \Symfony\Component\Console\Application            
            return \Illuminate\Console\Application::has($name);
        }
        
        /**
         * Returns an array of all unique namespaces used by currently registered commands.
         * 
         * It does not returns the global namespace which always exists.
         *
         * @return array An array of namespaces
         * @static 
         */
        public static function getNamespaces(){
            //Method inherited from \Symfony\Component\Console\Application            
            return \Illuminate\Console\Application::getNamespaces();
        }
        
        /**
         * Finds a registered namespace by a name or an abbreviation.
         *
         * @param string $namespace A namespace or abbreviation to search for
         * @return string A registered namespace
         * @throws \InvalidArgumentException When namespace is incorrect or ambiguous
         * @static 
         */
        public static function findNamespace($namespace){
            //Method inherited from \Symfony\Component\Console\Application            
            return \Illuminate\Console\Application::findNamespace($namespace);
        }
        
        /**
         * Finds a command by name or alias.
         * 
         * Contrary to get, this command tries to find the best
         * match if you give it an abbreviation of a name or alias.
         *
         * @param string $name A command name or a command alias
         * @return \Symfony\Component\Console\Command A Command instance
         * @throws \InvalidArgumentException When command name is incorrect or ambiguous
         * @api 
         * @static 
         */
        public static function find($name){
            //Method inherited from \Symfony\Component\Console\Application            
            return \Illuminate\Console\Application::find($name);
        }
        
        /**
         * Gets the commands (registered in the given namespace if provided).
         * 
         * The array keys are the full names and the values the command instances.
         *
         * @param string $namespace A namespace name
         * @return \Symfony\Component\Console\Command[] An array of Command instances
         * @api 
         * @static 
         */
        public static function all($namespace = null){
            //Method inherited from \Symfony\Component\Console\Application            
            return \Illuminate\Console\Application::all($namespace);
        }
        
        /**
         * Returns an array of possible abbreviations given a set of names.
         *
         * @param array $names An array of names
         * @return array An array of abbreviations
         * @static 
         */
        public static function getAbbreviations($names){
            //Method inherited from \Symfony\Component\Console\Application            
            return \Illuminate\Console\Application::getAbbreviations($names);
        }
        
        /**
         * Returns a text representation of the Application.
         *
         * @param string $namespace An optional namespace name
         * @param bool $raw Whether to return raw command list
         * @return string A string representing the Application
         * @deprecated Deprecated since version 2.3, to be removed in 3.0.
         * @static 
         */
        public static function asText($namespace = null, $raw = false){
            //Method inherited from \Symfony\Component\Console\Application            
            return \Illuminate\Console\Application::asText($namespace, $raw);
        }
        
        /**
         * Returns an XML representation of the Application.
         *
         * @param string $namespace An optional namespace name
         * @param bool $asDom Whether to return a DOM or an XML string
         * @return string|\DOMDocument An XML string representing the Application
         * @deprecated Deprecated since version 2.3, to be removed in 3.0.
         * @static 
         */
        public static function asXml($namespace = null, $asDom = false){
            //Method inherited from \Symfony\Component\Console\Application            
            return \Illuminate\Console\Application::asXml($namespace, $asDom);
        }
        
        /**
         * Tries to figure out the terminal dimensions based on the current environment
         *
         * @return array Array containing width and height
         * @static 
         */
        public static function getTerminalDimensions(){
            //Method inherited from \Symfony\Component\Console\Application            
            return \Illuminate\Console\Application::getTerminalDimensions();
        }
        
        /**
         * Sets terminal dimensions.
         * 
         * Can be useful to force terminal dimensions for functional tests.
         *
         * @param int $width The width
         * @param int $height The height
         * @return \Symfony\Component\Console\Application The current application
         * @static 
         */
        public static function setTerminalDimensions($width, $height){
            //Method inherited from \Symfony\Component\Console\Application            
            return \Illuminate\Console\Application::setTerminalDimensions($width, $height);
        }
        
        /**
         * Returns the namespace part of the command name.
         * 
         * This method is not part of public API and should not be used directly.
         *
         * @param string $name The full name of the command
         * @param string $limit The maximum number of parts of the namespace
         * @return string The namespace of the command
         * @static 
         */
        public static function extractNamespace($name, $limit = null){
            //Method inherited from \Symfony\Component\Console\Application            
            return \Illuminate\Console\Application::extractNamespace($name, $limit);
        }
        
        /**
         * Sets the default Command name.
         *
         * @param string $commandName The Command name
         * @static 
         */
        public static function setDefaultCommand($commandName){
            //Method inherited from \Symfony\Component\Console\Application            
            return \Illuminate\Console\Application::setDefaultCommand($commandName);
        }
        
    }


    class Auth extends \Illuminate\Support\Facades\Auth{
        
        /**
         * Create an instance of the database driver.
         *
         * @return \Illuminate\Auth\Guard 
         * @static 
         */
        public static function createDatabaseDriver(){
            return \Illuminate\Auth\AuthManager::createDatabaseDriver();
        }
        
        /**
         * Create an instance of the Eloquent driver.
         *
         * @return \Illuminate\Auth\Guard 
         * @static 
         */
        public static function createEloquentDriver(){
            return \Illuminate\Auth\AuthManager::createEloquentDriver();
        }
        
        /**
         * Get the default authentication driver name.
         *
         * @return string 
         * @static 
         */
        public static function getDefaultDriver(){
            return \Illuminate\Auth\AuthManager::getDefaultDriver();
        }
        
        /**
         * Set the default authentication driver name.
         *
         * @param string $name
         * @return void 
         * @static 
         */
        public static function setDefaultDriver($name){
            \Illuminate\Auth\AuthManager::setDefaultDriver($name);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function driver($driver = null){
            //Method inherited from \Illuminate\Support\Manager            
            return \Illuminate\Auth\AuthManager::driver($driver);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function extend($driver, $callback){
            //Method inherited from \Illuminate\Support\Manager            
            return \Illuminate\Auth\AuthManager::extend($driver, $callback);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getDrivers(){
            //Method inherited from \Illuminate\Support\Manager            
            return \Illuminate\Auth\AuthManager::getDrivers();
        }
        
        /**
         * Determine if the current user is authenticated.
         *
         * @return bool 
         * @static 
         */
        public static function check(){
            return \Illuminate\Auth\Guard::check();
        }
        
        /**
         * Determine if the current user is a guest.
         *
         * @return bool 
         * @static 
         */
        public static function guest(){
            return \Illuminate\Auth\Guard::guest();
        }
        
        /**
         * Get the currently authenticated user.
         *
         * @return \Illuminate\Contracts\Auth\User|null 
         * @static 
         */
        public static function user(){
            return \Illuminate\Auth\Guard::user();
        }
        
        /**
         * Get the ID for the currently authenticated user.
         *
         * @return int|null 
         * @static 
         */
        public static function id(){
            return \Illuminate\Auth\Guard::id();
        }
        
        /**
         * Log a user into the application without sessions or cookies.
         *
         * @param array $credentials
         * @return bool 
         * @static 
         */
        public static function once($credentials = array()){
            return \Illuminate\Auth\Guard::once($credentials);
        }
        
        /**
         * Validate a user's credentials.
         *
         * @param array $credentials
         * @return bool 
         * @static 
         */
        public static function validate($credentials = array()){
            return \Illuminate\Auth\Guard::validate($credentials);
        }
        
        /**
         * Attempt to authenticate using HTTP Basic Auth.
         *
         * @param string $field
         * @return \Symfony\Component\HttpFoundation\Response|null 
         * @static 
         */
        public static function basic($field = 'email'){
            return \Illuminate\Auth\Guard::basic($field);
        }
        
        /**
         * Perform a stateless HTTP Basic login attempt.
         *
         * @param string $field
         * @return \Symfony\Component\HttpFoundation\Response|null 
         * @static 
         */
        public static function onceBasic($field = 'email'){
            return \Illuminate\Auth\Guard::onceBasic($field);
        }
        
        /**
         * Attempt to authenticate a user using the given credentials.
         *
         * @param array $credentials
         * @param bool $remember
         * @param bool $login
         * @return bool 
         * @static 
         */
        public static function attempt($credentials = array(), $remember = false, $login = true){
            return \Illuminate\Auth\Guard::attempt($credentials, $remember, $login);
        }
        
        /**
         * Register an authentication attempt event listener.
         *
         * @param mixed $callback
         * @return void 
         * @static 
         */
        public static function attempting($callback){
            \Illuminate\Auth\Guard::attempting($callback);
        }
        
        /**
         * Log a user into the application.
         *
         * @param \Illuminate\Contracts\Auth\User $user
         * @param bool $remember
         * @return void 
         * @static 
         */
        public static function login($user, $remember = false){
            \Illuminate\Auth\Guard::login($user, $remember);
        }
        
        /**
         * Log the given user ID into the application.
         *
         * @param mixed $id
         * @param bool $remember
         * @return \Illuminate\Contracts\Auth\User 
         * @static 
         */
        public static function loginUsingId($id, $remember = false){
            return \Illuminate\Auth\Guard::loginUsingId($id, $remember);
        }
        
        /**
         * Log the given user ID into the application without sessions or cookies.
         *
         * @param mixed $id
         * @return bool 
         * @static 
         */
        public static function onceUsingId($id){
            return \Illuminate\Auth\Guard::onceUsingId($id);
        }
        
        /**
         * Log the user out of the application.
         *
         * @return void 
         * @static 
         */
        public static function logout(){
            \Illuminate\Auth\Guard::logout();
        }
        
        /**
         * Get the cookie creator instance used by the guard.
         *
         * @return \Illuminate\Contracts\Cookie\QueueingFactory 
         * @throws \RuntimeException
         * @static 
         */
        public static function getCookieJar(){
            return \Illuminate\Auth\Guard::getCookieJar();
        }
        
        /**
         * Set the cookie creator instance used by the guard.
         *
         * @param \Illuminate\Contracts\Cookie\QueueingFactory $cookie
         * @return void 
         * @static 
         */
        public static function setCookieJar($cookie){
            \Illuminate\Auth\Guard::setCookieJar($cookie);
        }
        
        /**
         * Get the event dispatcher instance.
         *
         * @return \Illuminate\Contracts\Events\Dispatcher 
         * @static 
         */
        public static function getDispatcher(){
            return \Illuminate\Auth\Guard::getDispatcher();
        }
        
        /**
         * Set the event dispatcher instance.
         *
         * @param \Illuminate\Contracts\Events\Dispatcher
         * @return void 
         * @static 
         */
        public static function setDispatcher($events){
            \Illuminate\Auth\Guard::setDispatcher($events);
        }
        
        /**
         * Get the session store used by the guard.
         *
         * @return \Illuminate\Session\Store 
         * @static 
         */
        public static function getSession(){
            return \Illuminate\Auth\Guard::getSession();
        }
        
        /**
         * Get the user provider used by the guard.
         *
         * @return \Illuminate\Auth\Guard 
         * @static 
         */
        public static function getProvider(){
            return \Illuminate\Auth\Guard::getProvider();
        }
        
        /**
         * Set the user provider used by the guard.
         *
         * @param \Illuminate\Auth\UserProviderInterface $provider
         * @return void 
         * @static 
         */
        public static function setProvider($provider){
            \Illuminate\Auth\Guard::setProvider($provider);
        }
        
        /**
         * Return the currently cached user of the application.
         *
         * @return \Illuminate\Contracts\Auth\User|null 
         * @static 
         */
        public static function getUser(){
            return \Illuminate\Auth\Guard::getUser();
        }
        
        /**
         * Set the current user of the application.
         *
         * @param \Illuminate\Contracts\Auth\User $user
         * @return void 
         * @static 
         */
        public static function setUser($user){
            \Illuminate\Auth\Guard::setUser($user);
        }
        
        /**
         * Get the current request instance.
         *
         * @return \Symfony\Component\HttpFoundation\Request 
         * @static 
         */
        public static function getRequest(){
            return \Illuminate\Auth\Guard::getRequest();
        }
        
        /**
         * Set the current request instance.
         *
         * @param \Symfony\Component\HttpFoundation\Request
         * @return $this 
         * @static 
         */
        public static function setRequest($request){
            return \Illuminate\Auth\Guard::setRequest($request);
        }
        
        /**
         * Get the last user we attempted to authenticate.
         *
         * @return \Illuminate\Contracts\Auth\User 
         * @static 
         */
        public static function getLastAttempted(){
            return \Illuminate\Auth\Guard::getLastAttempted();
        }
        
        /**
         * Get a unique identifier for the auth session value.
         *
         * @return string 
         * @static 
         */
        public static function getName(){
            return \Illuminate\Auth\Guard::getName();
        }
        
        /**
         * Get the name of the cookie used to store the "recaller".
         *
         * @return string 
         * @static 
         */
        public static function getRecallerName(){
            return \Illuminate\Auth\Guard::getRecallerName();
        }
        
        /**
         * Determine if the user was authenticated via "remember me" cookie.
         *
         * @return bool 
         * @static 
         */
        public static function viaRemember(){
            return \Illuminate\Auth\Guard::viaRemember();
        }
        
    }


    class Blade extends \Illuminate\Support\Facades\Blade{
        
        /**
         * Compile the view at the given path.
         *
         * @param string $path
         * @return void 
         * @static 
         */
        public static function compile($path = null){
            \Illuminate\View\Compilers\BladeCompiler::compile($path);
        }
        
        /**
         * Get the path currently being compiled.
         *
         * @return string 
         * @static 
         */
        public static function getPath(){
            return \Illuminate\View\Compilers\BladeCompiler::getPath();
        }
        
        /**
         * Set the path currently being compiled.
         *
         * @param string $path
         * @return void 
         * @static 
         */
        public static function setPath($path){
            \Illuminate\View\Compilers\BladeCompiler::setPath($path);
        }
        
        /**
         * Compile the given Blade template contents.
         *
         * @param string $value
         * @return string 
         * @static 
         */
        public static function compileString($value){
            return \Illuminate\View\Compilers\BladeCompiler::compileString($value);
        }
        
        /**
         * Compile the default values for the echo statement.
         *
         * @param string $value
         * @return string 
         * @static 
         */
        public static function compileEchoDefaults($value){
            return \Illuminate\View\Compilers\BladeCompiler::compileEchoDefaults($value);
        }
        
        /**
         * Register a custom Blade compiler.
         *
         * @param \Closure $compiler
         * @return void 
         * @static 
         */
        public static function extend($compiler){
            \Illuminate\View\Compilers\BladeCompiler::extend($compiler);
        }
        
        /**
         * Get the regular expression for a generic Blade function.
         *
         * @param string $function
         * @return string 
         * @static 
         */
        public static function createMatcher($function){
            return \Illuminate\View\Compilers\BladeCompiler::createMatcher($function);
        }
        
        /**
         * Get the regular expression for a generic Blade function.
         *
         * @param string $function
         * @return string 
         * @static 
         */
        public static function createOpenMatcher($function){
            return \Illuminate\View\Compilers\BladeCompiler::createOpenMatcher($function);
        }
        
        /**
         * Create a plain Blade matcher.
         *
         * @param string $function
         * @return string 
         * @static 
         */
        public static function createPlainMatcher($function){
            return \Illuminate\View\Compilers\BladeCompiler::createPlainMatcher($function);
        }
        
        /**
         * Sets the raw tags used for the compiler.
         *
         * @param string $openTag
         * @param string $closeTag
         * @return void 
         * @static 
         */
        public static function setRawTags($openTag, $closeTag){
            \Illuminate\View\Compilers\BladeCompiler::setRawTags($openTag, $closeTag);
        }
        
        /**
         * Sets the content tags used for the compiler.
         *
         * @param string $openTag
         * @param string $closeTag
         * @param bool $escaped
         * @return void 
         * @static 
         */
        public static function setContentTags($openTag, $closeTag, $escaped = false){
            \Illuminate\View\Compilers\BladeCompiler::setContentTags($openTag, $closeTag, $escaped);
        }
        
        /**
         * Sets the escaped content tags used for the compiler.
         *
         * @param string $openTag
         * @param string $closeTag
         * @return void 
         * @static 
         */
        public static function setEscapedContentTags($openTag, $closeTag){
            \Illuminate\View\Compilers\BladeCompiler::setEscapedContentTags($openTag, $closeTag);
        }
        
        /**
         * Gets the content tags used for the compiler.
         *
         * @return string 
         * @static 
         */
        public static function getContentTags(){
            return \Illuminate\View\Compilers\BladeCompiler::getContentTags();
        }
        
        /**
         * Gets the escaped content tags used for the compiler.
         *
         * @return string 
         * @static 
         */
        public static function getEscapedContentTags(){
            return \Illuminate\View\Compilers\BladeCompiler::getEscapedContentTags();
        }
        
        /**
         * Set the echo format to be used by the compiler.
         *
         * @param string $format
         * @return void 
         * @static 
         */
        public static function setEchoFormat($format){
            \Illuminate\View\Compilers\BladeCompiler::setEchoFormat($format);
        }
        
        /**
         * Get the path to the compiled version of a view.
         *
         * @param string $path
         * @return string 
         * @static 
         */
        public static function getCompiledPath($path){
            //Method inherited from \Illuminate\View\Compilers\Compiler            
            return \Illuminate\View\Compilers\BladeCompiler::getCompiledPath($path);
        }
        
        /**
         * Determine if the view at the given path is expired.
         *
         * @param string $path
         * @return bool 
         * @static 
         */
        public static function isExpired($path){
            //Method inherited from \Illuminate\View\Compilers\Compiler            
            return \Illuminate\View\Compilers\BladeCompiler::isExpired($path);
        }
        
    }


    class Cache extends \Illuminate\Support\Facades\Cache{
        
        /**
         * Get the cache "prefix" value.
         *
         * @return string 
         * @static 
         */
        public static function getPrefix(){
            return \Illuminate\Cache\CacheManager::getPrefix();
        }
        
        /**
         * Set the cache "prefix" value.
         *
         * @param string $name
         * @return void 
         * @static 
         */
        public static function setPrefix($name){
            \Illuminate\Cache\CacheManager::setPrefix($name);
        }
        
        /**
         * Get the default cache driver name.
         *
         * @return string 
         * @static 
         */
        public static function getDefaultDriver(){
            return \Illuminate\Cache\CacheManager::getDefaultDriver();
        }
        
        /**
         * Set the default cache driver name.
         *
         * @param string $name
         * @return void 
         * @static 
         */
        public static function setDefaultDriver($name){
            \Illuminate\Cache\CacheManager::setDefaultDriver($name);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function driver($driver = null){
            //Method inherited from \Illuminate\Support\Manager            
            return \Illuminate\Cache\CacheManager::driver($driver);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function extend($driver, $callback){
            //Method inherited from \Illuminate\Support\Manager            
            return \Illuminate\Cache\CacheManager::extend($driver, $callback);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getDrivers(){
            //Method inherited from \Illuminate\Support\Manager            
            return \Illuminate\Cache\CacheManager::getDrivers();
        }
        
        /**
         * Determine if an item exists in the cache.
         *
         * @param string $key
         * @return bool 
         * @static 
         */
        public static function has($key){
            return \Illuminate\Cache\Repository::has($key);
        }
        
        /**
         * Retrieve an item from the cache by key.
         *
         * @param string $key
         * @param mixed $default
         * @return mixed 
         * @static 
         */
        public static function get($key, $default = null){
            return \Illuminate\Cache\Repository::get($key, $default);
        }
        
        /**
         * Retrieve an item from the cache and delete it.
         *
         * @param string $key
         * @param mixed $default
         * @return mixed 
         * @static 
         */
        public static function pull($key, $default = null){
            return \Illuminate\Cache\Repository::pull($key, $default);
        }
        
        /**
         * Store an item in the cache.
         *
         * @param string $key
         * @param mixed $value
         * @param \DateTime|int $minutes
         * @return void 
         * @static 
         */
        public static function put($key, $value, $minutes){
            \Illuminate\Cache\Repository::put($key, $value, $minutes);
        }
        
        /**
         * Store an item in the cache if the key does not exist.
         *
         * @param string $key
         * @param mixed $value
         * @param \DateTime|int $minutes
         * @return bool 
         * @static 
         */
        public static function add($key, $value, $minutes){
            return \Illuminate\Cache\Repository::add($key, $value, $minutes);
        }
        
        /**
         * Get an item from the cache, or store the default value.
         *
         * @param string $key
         * @param \DateTime|int $minutes
         * @param \Closure $callback
         * @return mixed 
         * @static 
         */
        public static function remember($key, $minutes, $callback){
            return \Illuminate\Cache\Repository::remember($key, $minutes, $callback);
        }
        
        /**
         * Get an item from the cache, or store the default value forever.
         *
         * @param string $key
         * @param \Closure $callback
         * @return mixed 
         * @static 
         */
        public static function sear($key, $callback){
            return \Illuminate\Cache\Repository::sear($key, $callback);
        }
        
        /**
         * Get an item from the cache, or store the default value forever.
         *
         * @param string $key
         * @param \Closure $callback
         * @return mixed 
         * @static 
         */
        public static function rememberForever($key, $callback){
            return \Illuminate\Cache\Repository::rememberForever($key, $callback);
        }
        
        /**
         * Remove an item from the cache.
         *
         * @param string $key
         * @return bool 
         * @static 
         */
        public static function forget($key){
            return \Illuminate\Cache\Repository::forget($key);
        }
        
        /**
         * Get the default cache time.
         *
         * @return int 
         * @static 
         */
        public static function getDefaultCacheTime(){
            return \Illuminate\Cache\Repository::getDefaultCacheTime();
        }
        
        /**
         * Set the default cache time in minutes.
         *
         * @param int $minutes
         * @return void 
         * @static 
         */
        public static function setDefaultCacheTime($minutes){
            \Illuminate\Cache\Repository::setDefaultCacheTime($minutes);
        }
        
        /**
         * Get the cache store implementation.
         *
         * @return \Illuminate\Cache\FileStore 
         * @static 
         */
        public static function getStore(){
            return \Illuminate\Cache\Repository::getStore();
        }
        
        /**
         * Determine if a cached value exists.
         *
         * @param string $key
         * @return bool 
         * @static 
         */
        public static function offsetExists($key){
            return \Illuminate\Cache\Repository::offsetExists($key);
        }
        
        /**
         * Retrieve an item from the cache by key.
         *
         * @param string $key
         * @return mixed 
         * @static 
         */
        public static function offsetGet($key){
            return \Illuminate\Cache\Repository::offsetGet($key);
        }
        
        /**
         * Store an item in the cache for the default time.
         *
         * @param string $key
         * @param mixed $value
         * @return void 
         * @static 
         */
        public static function offsetSet($key, $value){
            \Illuminate\Cache\Repository::offsetSet($key, $value);
        }
        
        /**
         * Remove an item from the cache.
         *
         * @param string $key
         * @return void 
         * @static 
         */
        public static function offsetUnset($key){
            \Illuminate\Cache\Repository::offsetUnset($key);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function macro($name, $macro){
            return \Illuminate\Cache\Repository::macro($name, $macro);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function hasMacro($name){
            return \Illuminate\Cache\Repository::hasMacro($name);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function macroCall($method, $parameters){
            return \Illuminate\Cache\Repository::macroCall($method, $parameters);
        }
        
        /**
         * Increment the value of an item in the cache.
         *
         * @param string $key
         * @param mixed $value
         * @return int 
         * @static 
         */
        public static function increment($key, $value = 1){
            return \Illuminate\Cache\FileStore::increment($key, $value);
        }
        
        /**
         * Decrement the value of an item in the cache.
         *
         * @param string $key
         * @param mixed $value
         * @return int 
         * @static 
         */
        public static function decrement($key, $value = 1){
            return \Illuminate\Cache\FileStore::decrement($key, $value);
        }
        
        /**
         * Store an item in the cache indefinitely.
         *
         * @param string $key
         * @param mixed $value
         * @return void 
         * @static 
         */
        public static function forever($key, $value){
            \Illuminate\Cache\FileStore::forever($key, $value);
        }
        
        /**
         * Remove all items from the cache.
         *
         * @return void 
         * @static 
         */
        public static function flush(){
            \Illuminate\Cache\FileStore::flush();
        }
        
        /**
         * Get the Filesystem instance.
         *
         * @return \Illuminate\Filesystem\Filesystem 
         * @static 
         */
        public static function getFilesystem(){
            return \Illuminate\Cache\FileStore::getFilesystem();
        }
        
        /**
         * Get the working directory of the cache.
         *
         * @return string 
         * @static 
         */
        public static function getDirectory(){
            return \Illuminate\Cache\FileStore::getDirectory();
        }
        
    }


    class Config extends \Illuminate\Support\Facades\Config{
        
        /**
         * 
         *
         * @static 
         */
        public static function has($key){
            return \Illuminate\Config\Repository::has($key);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function hasGroup($key){
            return \Illuminate\Config\Repository::hasGroup($key);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function get($key, $default = null){
            return \Illuminate\Config\Repository::get($key, $default);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function set($key, $value){
            return \Illuminate\Config\Repository::set($key, $value);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function package($package, $hint, $namespace = null){
            return \Illuminate\Config\Repository::package($package, $hint, $namespace);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function afterLoading($namespace, $callback){
            return \Illuminate\Config\Repository::afterLoading($namespace, $callback);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function addNamespace($namespace, $hint){
            return \Illuminate\Config\Repository::addNamespace($namespace, $hint);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getNamespaces(){
            return \Illuminate\Config\Repository::getNamespaces();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getLoader(){
            return \Illuminate\Config\Repository::getLoader();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setLoader($loader){
            return \Illuminate\Config\Repository::setLoader($loader);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getEnvironment(){
            return \Illuminate\Config\Repository::getEnvironment();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getAfterLoadCallbacks(){
            return \Illuminate\Config\Repository::getAfterLoadCallbacks();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getItems(){
            return \Illuminate\Config\Repository::getItems();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function offsetExists($key){
            return \Illuminate\Config\Repository::offsetExists($key);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function offsetGet($key){
            return \Illuminate\Config\Repository::offsetGet($key);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function offsetSet($key, $value){
            return \Illuminate\Config\Repository::offsetSet($key, $value);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function offsetUnset($key){
            return \Illuminate\Config\Repository::offsetUnset($key);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function parseKey($key){
            //Method inherited from \Illuminate\Support\NamespacedItemResolver            
            return \Illuminate\Config\Repository::parseKey($key);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setParsedKey($key, $parsed){
            //Method inherited from \Illuminate\Support\NamespacedItemResolver            
            return \Illuminate\Config\Repository::setParsedKey($key, $parsed);
        }
        
    }


    class Cookie extends \Illuminate\Support\Facades\Cookie{
        
        /**
         * 
         *
         * @static 
         */
        public static function make($name, $value, $minutes = 0, $path = null, $domain = null, $secure = false, $httpOnly = true){
            return \Illuminate\Cookie\CookieJar::make($name, $value, $minutes, $path, $domain, $secure, $httpOnly);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function forever($name, $value, $path = null, $domain = null, $secure = false, $httpOnly = true){
            return \Illuminate\Cookie\CookieJar::forever($name, $value, $path, $domain, $secure, $httpOnly);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function forget($name, $path = null, $domain = null){
            return \Illuminate\Cookie\CookieJar::forget($name, $path, $domain);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function hasQueued($key){
            return \Illuminate\Cookie\CookieJar::hasQueued($key);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function queued($key, $default = null){
            return \Illuminate\Cookie\CookieJar::queued($key, $default);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function queue(){
            return \Illuminate\Cookie\CookieJar::queue();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function unqueue($name){
            return \Illuminate\Cookie\CookieJar::unqueue($name);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setDefaultPathAndDomain($path, $domain){
            return \Illuminate\Cookie\CookieJar::setDefaultPathAndDomain($path, $domain);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getQueuedCookies(){
            return \Illuminate\Cookie\CookieJar::getQueuedCookies();
        }
        
    }


    class Crypt extends \Illuminate\Support\Facades\Crypt{
        
        /**
         * 
         *
         * @static 
         */
        public static function encrypt($value){
            return \Illuminate\Encryption\Encrypter::encrypt($value);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function decrypt($payload){
            return \Illuminate\Encryption\Encrypter::decrypt($payload);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setKey($key){
            return \Illuminate\Encryption\Encrypter::setKey($key);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setCipher($cipher){
            return \Illuminate\Encryption\Encrypter::setCipher($cipher);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setMode($mode){
            return \Illuminate\Encryption\Encrypter::setMode($mode);
        }
        
    }


    class DB extends \Illuminate\Support\Facades\DB{
        
        /**
         * 
         *
         * @static 
         */
        public static function connection($name = null){
            return \Illuminate\Database\DatabaseManager::connection($name);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function purge($name = null){
            return \Illuminate\Database\DatabaseManager::purge($name);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function disconnect($name = null){
            return \Illuminate\Database\DatabaseManager::disconnect($name);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function reconnect($name = null){
            return \Illuminate\Database\DatabaseManager::reconnect($name);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getDefaultConnection(){
            return \Illuminate\Database\DatabaseManager::getDefaultConnection();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setDefaultConnection($name){
            return \Illuminate\Database\DatabaseManager::setDefaultConnection($name);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function extend($name, $resolver){
            return \Illuminate\Database\DatabaseManager::extend($name, $resolver);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getConnections(){
            return \Illuminate\Database\DatabaseManager::getConnections();
        }
        
    }


    class Event extends \Illuminate\Support\Facades\Event{
        
        /**
         * 
         *
         * @static 
         */
        public static function listen($events, $listener, $priority = 0){
            return \Illuminate\Events\Dispatcher::listen($events, $listener, $priority);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function hasListeners($eventName){
            return \Illuminate\Events\Dispatcher::hasListeners($eventName);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function queue($event, $payload = array()){
            return \Illuminate\Events\Dispatcher::queue($event, $payload);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function subscribe($subscriber){
            return \Illuminate\Events\Dispatcher::subscribe($subscriber);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function until($event, $payload = array()){
            return \Illuminate\Events\Dispatcher::until($event, $payload);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function flush($event){
            return \Illuminate\Events\Dispatcher::flush($event);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function firing(){
            return \Illuminate\Events\Dispatcher::firing();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function fire($event, $payload = array(), $halt = false){
            return \Illuminate\Events\Dispatcher::fire($event, $payload, $halt);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getListeners($eventName){
            return \Illuminate\Events\Dispatcher::getListeners($eventName);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function makeListener($listener){
            return \Illuminate\Events\Dispatcher::makeListener($listener);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function createClassListener($listener){
            return \Illuminate\Events\Dispatcher::createClassListener($listener);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function forget($event){
            return \Illuminate\Events\Dispatcher::forget($event);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function forgetQueued(){
            return \Illuminate\Events\Dispatcher::forgetQueued();
        }
        
    }


    class File extends \Illuminate\Support\Facades\File{
        
        /**
         * 
         *
         * @static 
         */
        public static function exists($path){
            return \Illuminate\Filesystem\Filesystem::exists($path);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function get($path){
            return \Illuminate\Filesystem\Filesystem::get($path);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getRequire($path){
            return \Illuminate\Filesystem\Filesystem::getRequire($path);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function requireOnce($file){
            return \Illuminate\Filesystem\Filesystem::requireOnce($file);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function put($path, $contents){
            return \Illuminate\Filesystem\Filesystem::put($path, $contents);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function prepend($path, $data){
            return \Illuminate\Filesystem\Filesystem::prepend($path, $data);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function append($path, $data){
            return \Illuminate\Filesystem\Filesystem::append($path, $data);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function delete($paths){
            return \Illuminate\Filesystem\Filesystem::delete($paths);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function move($path, $target){
            return \Illuminate\Filesystem\Filesystem::move($path, $target);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function copy($path, $target){
            return \Illuminate\Filesystem\Filesystem::copy($path, $target);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function extension($path){
            return \Illuminate\Filesystem\Filesystem::extension($path);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function type($path){
            return \Illuminate\Filesystem\Filesystem::type($path);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function size($path){
            return \Illuminate\Filesystem\Filesystem::size($path);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function lastModified($path){
            return \Illuminate\Filesystem\Filesystem::lastModified($path);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function isDirectory($directory){
            return \Illuminate\Filesystem\Filesystem::isDirectory($directory);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function isWritable($path){
            return \Illuminate\Filesystem\Filesystem::isWritable($path);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function isFile($file){
            return \Illuminate\Filesystem\Filesystem::isFile($file);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function glob($pattern, $flags = 0){
            return \Illuminate\Filesystem\Filesystem::glob($pattern, $flags);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function files($directory){
            return \Illuminate\Filesystem\Filesystem::files($directory);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function allFiles($directory){
            return \Illuminate\Filesystem\Filesystem::allFiles($directory);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function directories($directory){
            return \Illuminate\Filesystem\Filesystem::directories($directory);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function makeDirectory($path, $mode = 493, $recursive = false, $force = false){
            return \Illuminate\Filesystem\Filesystem::makeDirectory($path, $mode, $recursive, $force);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function copyDirectory($directory, $destination, $options = null){
            return \Illuminate\Filesystem\Filesystem::copyDirectory($directory, $destination, $options);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function deleteDirectory($directory, $preserve = false){
            return \Illuminate\Filesystem\Filesystem::deleteDirectory($directory, $preserve);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function cleanDirectory($directory){
            return \Illuminate\Filesystem\Filesystem::cleanDirectory($directory);
        }
        
    }


    class Hash extends \Illuminate\Support\Facades\Hash{
        
        /**
         * Hash the given value.
         *
         * @param string $value
         * @param array $options
         * @return string 
         * @throws \RuntimeException
         * @static 
         */
        public static function make($value, $options = array()){
            return \Illuminate\Hashing\BcryptHasher::make($value, $options);
        }
        
        /**
         * Check the given plain value against a hash.
         *
         * @param string $value
         * @param string $hashedValue
         * @param array $options
         * @return bool 
         * @static 
         */
        public static function check($value, $hashedValue, $options = array()){
            return \Illuminate\Hashing\BcryptHasher::check($value, $hashedValue, $options);
        }
        
        /**
         * Check if the given hash has been hashed using the given options.
         *
         * @param string $hashedValue
         * @param array $options
         * @return bool 
         * @static 
         */
        public static function needsRehash($hashedValue, $options = array()){
            return \Illuminate\Hashing\BcryptHasher::needsRehash($hashedValue, $options);
        }
        
    }


    class Input extends \Illuminate\Support\Facades\Input{
        
        /**
         * 
         *
         * @static 
         */
        public static function instance(){
            return \Illuminate\Http\Request::instance();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function method(){
            return \Illuminate\Http\Request::method();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function root(){
            return \Illuminate\Http\Request::root();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function url(){
            return \Illuminate\Http\Request::url();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function fullUrl(){
            return \Illuminate\Http\Request::fullUrl();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function path(){
            return \Illuminate\Http\Request::path();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function decodedPath(){
            return \Illuminate\Http\Request::decodedPath();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function segment($index, $default = null){
            return \Illuminate\Http\Request::segment($index, $default);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function segments(){
            return \Illuminate\Http\Request::segments();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function is(){
            return \Illuminate\Http\Request::is();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function ajax(){
            return \Illuminate\Http\Request::ajax();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function secure(){
            return \Illuminate\Http\Request::secure();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function ip(){
            return \Illuminate\Http\Request::ip();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function ips(){
            return \Illuminate\Http\Request::ips();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function exists($key){
            return \Illuminate\Http\Request::exists($key);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function has($key){
            return \Illuminate\Http\Request::has($key);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function all(){
            return \Illuminate\Http\Request::all();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function input($key = null, $default = null){
            return \Illuminate\Http\Request::input($key, $default);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function only($keys){
            return \Illuminate\Http\Request::only($keys);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function except($keys){
            return \Illuminate\Http\Request::except($keys);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function query($key = null, $default = null){
            return \Illuminate\Http\Request::query($key, $default);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function hasCookie($key){
            return \Illuminate\Http\Request::hasCookie($key);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function cookie($key = null, $default = null){
            return \Illuminate\Http\Request::cookie($key, $default);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function file($key = null, $default = null){
            return \Illuminate\Http\Request::file($key, $default);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function hasFile($key){
            return \Illuminate\Http\Request::hasFile($key);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function header($key = null, $default = null){
            return \Illuminate\Http\Request::header($key, $default);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function server($key = null, $default = null){
            return \Illuminate\Http\Request::server($key, $default);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function old($key = null, $default = null){
            return \Illuminate\Http\Request::old($key, $default);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function flash($filter = null, $keys = array()){
            return \Illuminate\Http\Request::flash($filter, $keys);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function flashOnly($keys){
            return \Illuminate\Http\Request::flashOnly($keys);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function flashExcept($keys){
            return \Illuminate\Http\Request::flashExcept($keys);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function flush(){
            return \Illuminate\Http\Request::flush();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function merge($input){
            return \Illuminate\Http\Request::merge($input);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function replace($input){
            return \Illuminate\Http\Request::replace($input);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function json($key = null, $default = null){
            return \Illuminate\Http\Request::json($key, $default);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function isJson(){
            return \Illuminate\Http\Request::isJson();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function wantsJson(){
            return \Illuminate\Http\Request::wantsJson();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function format($default = 'html'){
            return \Illuminate\Http\Request::format($default);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function createFromBase($request){
            return \Illuminate\Http\Request::createFromBase($request);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function session(){
            return \Illuminate\Http\Request::session();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function user(){
            return \Illuminate\Http\Request::user();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function route(){
            return \Illuminate\Http\Request::route();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getUserResolver(){
            return \Illuminate\Http\Request::getUserResolver();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setUserResolver($callback){
            return \Illuminate\Http\Request::setUserResolver($callback);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getRouteResolver(){
            return \Illuminate\Http\Request::getRouteResolver();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setRouteResolver($callback){
            return \Illuminate\Http\Request::setRouteResolver($callback);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function initialize($query = array(), $request = array(), $attributes = array(), $cookies = array(), $files = array(), $server = array(), $content = null){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::initialize($query, $request, $attributes, $cookies, $files, $server, $content);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function createFromGlobals(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::createFromGlobals();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function create($uri, $method = 'GET', $parameters = array(), $cookies = array(), $files = array(), $server = array(), $content = null){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::create($uri, $method, $parameters, $cookies, $files, $server, $content);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setFactory($callable){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::setFactory($callable);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function duplicate($query = null, $request = null, $attributes = null, $cookies = null, $files = null, $server = null){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::duplicate($query, $request, $attributes, $cookies, $files, $server);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function overrideGlobals(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::overrideGlobals();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setTrustedProxies($proxies){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::setTrustedProxies($proxies);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getTrustedProxies(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getTrustedProxies();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setTrustedHosts($hostPatterns){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::setTrustedHosts($hostPatterns);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getTrustedHosts(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getTrustedHosts();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setTrustedHeaderName($key, $value){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::setTrustedHeaderName($key, $value);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getTrustedHeaderName($key){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getTrustedHeaderName($key);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function normalizeQueryString($qs){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::normalizeQueryString($qs);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function enableHttpMethodParameterOverride(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::enableHttpMethodParameterOverride();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getHttpMethodParameterOverride(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getHttpMethodParameterOverride();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function get($key, $default = null, $deep = false){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::get($key, $default, $deep);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getSession(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getSession();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function hasPreviousSession(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::hasPreviousSession();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function hasSession(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::hasSession();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setSession($session){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::setSession($session);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getClientIps(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getClientIps();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getClientIp(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getClientIp();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getScriptName(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getScriptName();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getPathInfo(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getPathInfo();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getBasePath(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getBasePath();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getBaseUrl(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getBaseUrl();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getScheme(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getScheme();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getPort(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getPort();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getUser(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getUser();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getPassword(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getPassword();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getUserInfo(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getUserInfo();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getHttpHost(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getHttpHost();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getRequestUri(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getRequestUri();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getSchemeAndHttpHost(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getSchemeAndHttpHost();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getUri(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getUri();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getUriForPath($path){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getUriForPath($path);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getQueryString(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getQueryString();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function isSecure(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::isSecure();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getHost(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getHost();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setMethod($method){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::setMethod($method);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getMethod(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getMethod();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getRealMethod(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getRealMethod();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getMimeType($format){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getMimeType($format);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getFormat($mimeType){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getFormat($mimeType);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setFormat($format, $mimeTypes){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::setFormat($format, $mimeTypes);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getRequestFormat($default = 'html'){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getRequestFormat($default);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setRequestFormat($format){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::setRequestFormat($format);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getContentType(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getContentType();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setDefaultLocale($locale){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::setDefaultLocale($locale);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getDefaultLocale(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getDefaultLocale();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setLocale($locale){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::setLocale($locale);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getLocale(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getLocale();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function isMethod($method){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::isMethod($method);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function isMethodSafe(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::isMethodSafe();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getContent($asResource = false){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getContent($asResource);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getETags(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getETags();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function isNoCache(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::isNoCache();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getPreferredLanguage($locales = null){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getPreferredLanguage($locales);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getLanguages(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getLanguages();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getCharsets(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getCharsets();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getEncodings(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getEncodings();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getAcceptableContentTypes(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getAcceptableContentTypes();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function isXmlHttpRequest(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::isXmlHttpRequest();
        }
        
    }


    class Lang extends \Illuminate\Support\Facades\Lang{
        
        /**
         * Determine if a translation exists.
         *
         * @param string $key
         * @param string $locale
         * @return bool 
         * @static 
         */
        public static function has($key, $locale = null){
            return \Illuminate\Translation\Translator::has($key, $locale);
        }
        
        /**
         * Get the translation for the given key.
         *
         * @param string $key
         * @param array $replace
         * @param string $locale
         * @return string 
         * @static 
         */
        public static function get($key, $replace = array(), $locale = null){
            return \Illuminate\Translation\Translator::get($key, $replace, $locale);
        }
        
        /**
         * Get a translation according to an integer value.
         *
         * @param string $key
         * @param int $number
         * @param array $replace
         * @param string $locale
         * @return string 
         * @static 
         */
        public static function choice($key, $number, $replace = array(), $locale = null){
            return \Illuminate\Translation\Translator::choice($key, $number, $replace, $locale);
        }
        
        /**
         * Get the translation for a given key.
         *
         * @param string $id
         * @param array $parameters
         * @param string $domain
         * @param string $locale
         * @return string 
         * @static 
         */
        public static function trans($id, $parameters = array(), $domain = 'messages', $locale = null){
            return \Illuminate\Translation\Translator::trans($id, $parameters, $domain, $locale);
        }
        
        /**
         * Get a translation according to an integer value.
         *
         * @param string $id
         * @param int $number
         * @param array $parameters
         * @param string $domain
         * @param string $locale
         * @return string 
         * @static 
         */
        public static function transChoice($id, $number, $parameters = array(), $domain = 'messages', $locale = null){
            return \Illuminate\Translation\Translator::transChoice($id, $number, $parameters, $domain, $locale);
        }
        
        /**
         * Load the specified language group.
         *
         * @param string $namespace
         * @param string $group
         * @param string $locale
         * @return void 
         * @static 
         */
        public static function load($namespace, $group, $locale){
            \Illuminate\Translation\Translator::load($namespace, $group, $locale);
        }
        
        /**
         * Add a new namespace to the loader.
         *
         * @param string $namespace
         * @param string $hint
         * @return void 
         * @static 
         */
        public static function addNamespace($namespace, $hint){
            \Illuminate\Translation\Translator::addNamespace($namespace, $hint);
        }
        
        /**
         * Parse a key into namespace, group, and item.
         *
         * @param string $key
         * @return array 
         * @static 
         */
        public static function parseKey($key){
            return \Illuminate\Translation\Translator::parseKey($key);
        }
        
        /**
         * Get the message selector instance.
         *
         * @return \Symfony\Component\Translation\MessageSelector 
         * @static 
         */
        public static function getSelector(){
            return \Illuminate\Translation\Translator::getSelector();
        }
        
        /**
         * Set the message selector instance.
         *
         * @param \Symfony\Component\Translation\MessageSelector $selector
         * @return void 
         * @static 
         */
        public static function setSelector($selector){
            \Illuminate\Translation\Translator::setSelector($selector);
        }
        
        /**
         * Get the language line loader implementation.
         *
         * @return \Illuminate\Translation\LoaderInterface 
         * @static 
         */
        public static function getLoader(){
            return \Illuminate\Translation\Translator::getLoader();
        }
        
        /**
         * Get the default locale being used.
         *
         * @return string 
         * @static 
         */
        public static function locale(){
            return \Illuminate\Translation\Translator::locale();
        }
        
        /**
         * Get the default locale being used.
         *
         * @return string 
         * @static 
         */
        public static function getLocale(){
            return \Illuminate\Translation\Translator::getLocale();
        }
        
        /**
         * Set the default locale.
         *
         * @param string $locale
         * @return void 
         * @static 
         */
        public static function setLocale($locale){
            \Illuminate\Translation\Translator::setLocale($locale);
        }
        
        /**
         * Get the fallback locale being used.
         *
         * @return string 
         * @static 
         */
        public static function getFallback(){
            return \Illuminate\Translation\Translator::getFallback();
        }
        
        /**
         * Set the fallback locale being used.
         *
         * @param string $fallback
         * @return void 
         * @static 
         */
        public static function setFallback($fallback){
            \Illuminate\Translation\Translator::setFallback($fallback);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setParsedKey($key, $parsed){
            //Method inherited from \Illuminate\Support\NamespacedItemResolver            
            return \Illuminate\Translation\Translator::setParsedKey($key, $parsed);
        }
        
    }


    class Log extends \Illuminate\Support\Facades\Log{
        
        /**
         * 
         *
         * @static 
         */
        public static function debug($message, $context = array()){
            return \Monolog\Logger::debug($message, $context);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function info($message, $context = array()){
            return \Monolog\Logger::info($message, $context);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function notice($message, $context = array()){
            return \Monolog\Logger::notice($message, $context);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function warning($message, $context = array()){
            return \Monolog\Logger::warning($message, $context);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function error($message, $context = array()){
            return \Monolog\Logger::error($message, $context);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function critical($message, $context = array()){
            return \Monolog\Logger::critical($message, $context);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function alert($message, $context = array()){
            return \Monolog\Logger::alert($message, $context);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function emergency($message, $context = array()){
            return \Monolog\Logger::emergency($message, $context);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function log($level, $message, $context = array()){
            return \Illuminate\Log\Writer::log($level, $message, $context);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function write($level, $message, $context = array()){
            return \Illuminate\Log\Writer::write($level, $message, $context);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function useFiles($path, $level = 'debug'){
            return \Illuminate\Log\Writer::useFiles($path, $level);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function useDailyFiles($path, $days = 0, $level = 'debug'){
            return \Illuminate\Log\Writer::useDailyFiles($path, $days, $level);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function useErrorLog($level = 'debug', $messageType = 0){
            return \Illuminate\Log\Writer::useErrorLog($level, $messageType);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function listen($callback){
            return \Illuminate\Log\Writer::listen($callback);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getMonolog(){
            return \Illuminate\Log\Writer::getMonolog();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getEventDispatcher(){
            return \Illuminate\Log\Writer::getEventDispatcher();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setEventDispatcher($dispatcher){
            return \Illuminate\Log\Writer::setEventDispatcher($dispatcher);
        }
        
    }


    class Mail extends \Illuminate\Support\Facades\Mail{
        
        /**
         * Set the global from address and name.
         *
         * @param string $address
         * @param string $name
         * @return void 
         * @static 
         */
        public static function alwaysFrom($address, $name = null){
            \Illuminate\Mail\Mailer::alwaysFrom($address, $name);
        }
        
        /**
         * Send a new message when only a plain part.
         *
         * @param string $view
         * @param array $data
         * @param mixed $callback
         * @return int 
         * @static 
         */
        public static function plain($view, $data, $callback){
            return \Illuminate\Mail\Mailer::plain($view, $data, $callback);
        }
        
        /**
         * Send a new message using a view.
         *
         * @param string|array $view
         * @param array $data
         * @param \Closure|string $callback
         * @return void 
         * @static 
         */
        public static function send($view, $data, $callback){
            \Illuminate\Mail\Mailer::send($view, $data, $callback);
        }
        
        /**
         * Queue a new e-mail message for sending.
         *
         * @param string|array $view
         * @param array $data
         * @param \Closure|string $callback
         * @param string $queue
         * @return mixed 
         * @static 
         */
        public static function queue($view, $data, $callback, $queue = null){
            return \Illuminate\Mail\Mailer::queue($view, $data, $callback, $queue);
        }
        
        /**
         * Queue a new e-mail message for sending on the given queue.
         *
         * @param string $queue
         * @param string|array $view
         * @param array $data
         * @param \Closure|string $callback
         * @return mixed 
         * @static 
         */
        public static function queueOn($queue, $view, $data, $callback){
            return \Illuminate\Mail\Mailer::queueOn($queue, $view, $data, $callback);
        }
        
        /**
         * Queue a new e-mail message for sending after (n) seconds.
         *
         * @param int $delay
         * @param string|array $view
         * @param array $data
         * @param \Closure|string $callback
         * @param string $queue
         * @return mixed 
         * @static 
         */
        public static function later($delay, $view, $data, $callback, $queue = null){
            return \Illuminate\Mail\Mailer::later($delay, $view, $data, $callback, $queue);
        }
        
        /**
         * Queue a new e-mail message for sending after (n) seconds on the given queue.
         *
         * @param string $queue
         * @param int $delay
         * @param string|array $view
         * @param array $data
         * @param \Closure|string $callback
         * @return mixed 
         * @static 
         */
        public static function laterOn($queue, $delay, $view, $data, $callback){
            return \Illuminate\Mail\Mailer::laterOn($queue, $delay, $view, $data, $callback);
        }
        
        /**
         * Handle a queued e-mail message job.
         *
         * @param \Illuminate\Contracts\Queue\Job $job
         * @param array $data
         * @return void 
         * @static 
         */
        public static function handleQueuedMessage($job, $data){
            \Illuminate\Mail\Mailer::handleQueuedMessage($job, $data);
        }
        
        /**
         * Tell the mailer to not really send messages.
         *
         * @param bool $value
         * @return void 
         * @static 
         */
        public static function pretend($value = true){
            \Illuminate\Mail\Mailer::pretend($value);
        }
        
        /**
         * Check if the mailer is pretending to send messages.
         *
         * @return bool 
         * @static 
         */
        public static function isPretending(){
            return \Illuminate\Mail\Mailer::isPretending();
        }
        
        /**
         * Get the view factory instance.
         *
         * @return \Illuminate\Contracts\View\Factory 
         * @static 
         */
        public static function getViewFactory(){
            return \Illuminate\Mail\Mailer::getViewFactory();
        }
        
        /**
         * Get the Swift Mailer instance.
         *
         * @return \Swift_Mailer 
         * @static 
         */
        public static function getSwiftMailer(){
            return \Illuminate\Mail\Mailer::getSwiftMailer();
        }
        
        /**
         * Get the array of failed recipients.
         *
         * @return array 
         * @static 
         */
        public static function failures(){
            return \Illuminate\Mail\Mailer::failures();
        }
        
        /**
         * Set the Swift Mailer instance.
         *
         * @param \Swift_Mailer $swift
         * @return void 
         * @static 
         */
        public static function setSwiftMailer($swift){
            \Illuminate\Mail\Mailer::setSwiftMailer($swift);
        }
        
        /**
         * Set the log writer instance.
         *
         * @param \Psr\Log\LoggerInterface $logger
         * @return $this 
         * @static 
         */
        public static function setLogger($logger){
            return \Illuminate\Mail\Mailer::setLogger($logger);
        }
        
        /**
         * Set the queue manager instance.
         *
         * @param \Illuminate\Contracts\Queue\Queue $queue
         * @return $this 
         * @static 
         */
        public static function setQueue($queue){
            return \Illuminate\Mail\Mailer::setQueue($queue);
        }
        
        /**
         * Set the IoC container instance.
         *
         * @param \Illuminate\Container\Container $container
         * @return void 
         * @static 
         */
        public static function setContainer($container){
            \Illuminate\Mail\Mailer::setContainer($container);
        }
        
    }


    class Queue extends \Illuminate\Support\Facades\Queue{
        
        /**
         * Register an event listener for the daemon queue loop.
         *
         * @param mixed $callback
         * @return void 
         * @static 
         */
        public static function looping($callback){
            \Illuminate\Queue\QueueManager::looping($callback);
        }
        
        /**
         * Register an event listener for the failed job event.
         *
         * @param mixed $callback
         * @return void 
         * @static 
         */
        public static function failing($callback){
            \Illuminate\Queue\QueueManager::failing($callback);
        }
        
        /**
         * Register an event listener for the daemon queue stopping.
         *
         * @param mixed $callback
         * @return void 
         * @static 
         */
        public static function stopping($callback){
            \Illuminate\Queue\QueueManager::stopping($callback);
        }
        
        /**
         * Determine if the driver is connected.
         *
         * @param string $name
         * @return bool 
         * @static 
         */
        public static function connected($name = null){
            return \Illuminate\Queue\QueueManager::connected($name);
        }
        
        /**
         * Resolve a queue connection instance.
         *
         * @param string $name
         * @return \Illuminate\Contracts\Queue\Queue 
         * @static 
         */
        public static function connection($name = null){
            return \Illuminate\Queue\QueueManager::connection($name);
        }
        
        /**
         * Add a queue connection resolver.
         *
         * @param string $driver
         * @param \Closure $resolver
         * @return void 
         * @static 
         */
        public static function extend($driver, $resolver){
            \Illuminate\Queue\QueueManager::extend($driver, $resolver);
        }
        
        /**
         * Add a queue connection resolver.
         *
         * @param string $driver
         * @param \Closure $resolver
         * @return void 
         * @static 
         */
        public static function addConnector($driver, $resolver){
            \Illuminate\Queue\QueueManager::addConnector($driver, $resolver);
        }
        
        /**
         * Get the name of the default queue connection.
         *
         * @return string 
         * @static 
         */
        public static function getDefaultDriver(){
            return \Illuminate\Queue\QueueManager::getDefaultDriver();
        }
        
        /**
         * Set the name of the default queue connection.
         *
         * @param string $name
         * @return void 
         * @static 
         */
        public static function setDefaultDriver($name){
            \Illuminate\Queue\QueueManager::setDefaultDriver($name);
        }
        
        /**
         * Get the full name for the given connection.
         *
         * @param string $connection
         * @return string 
         * @static 
         */
        public static function getName($connection = null){
            return \Illuminate\Queue\QueueManager::getName($connection);
        }
        
        /**
         * Determine if the application is in maintenance mode.
         *
         * @return bool 
         * @static 
         */
        public static function isDownForMaintenance(){
            return \Illuminate\Queue\QueueManager::isDownForMaintenance();
        }
        
        /**
         * Push a new job onto the queue.
         *
         * @param string $job
         * @param mixed $data
         * @param string $queue
         * @return mixed 
         * @static 
         */
        public static function push($job, $data = '', $queue = null){
            return \Illuminate\Queue\SyncQueue::push($job, $data, $queue);
        }
        
        /**
         * Push a raw payload onto the queue.
         *
         * @param string $payload
         * @param string $queue
         * @param array $options
         * @return mixed 
         * @static 
         */
        public static function pushRaw($payload, $queue = null, $options = array()){
            return \Illuminate\Queue\SyncQueue::pushRaw($payload, $queue, $options);
        }
        
        /**
         * Push a new job onto the queue after a delay.
         *
         * @param \DateTime|int $delay
         * @param string $job
         * @param mixed $data
         * @param string $queue
         * @return mixed 
         * @static 
         */
        public static function later($delay, $job, $data = '', $queue = null){
            return \Illuminate\Queue\SyncQueue::later($delay, $job, $data, $queue);
        }
        
        /**
         * Pop the next job off of the queue.
         *
         * @param string $queue
         * @return \Illuminate\Contracts\Queue\Job|null 
         * @static 
         */
        public static function pop($queue = null){
            return \Illuminate\Queue\SyncQueue::pop($queue);
        }
        
        /**
         * Marshal a push queue request and fire the job.
         *
         * @throws \RuntimeException
         * @static 
         */
        public static function marshal(){
            //Method inherited from \Illuminate\Queue\Queue            
            return \Illuminate\Queue\SyncQueue::marshal();
        }
        
        /**
         * Push a new an array of jobs onto the queue.
         *
         * @param array $jobs
         * @param mixed $data
         * @param string $queue
         * @return mixed 
         * @static 
         */
        public static function bulk($jobs, $data = '', $queue = null){
            //Method inherited from \Illuminate\Queue\Queue            
            return \Illuminate\Queue\SyncQueue::bulk($jobs, $data, $queue);
        }
        
        /**
         * Get the current UNIX timestamp.
         *
         * @return int 
         * @static 
         */
        public static function getTime(){
            //Method inherited from \Illuminate\Queue\Queue            
            return \Illuminate\Queue\SyncQueue::getTime();
        }
        
        /**
         * Set the IoC container instance.
         *
         * @param \Illuminate\Container\Container $container
         * @return void 
         * @static 
         */
        public static function setContainer($container){
            //Method inherited from \Illuminate\Queue\Queue            
            \Illuminate\Queue\SyncQueue::setContainer($container);
        }
        
        /**
         * Set the encrypter instance.
         *
         * @param \Illuminate\Contracts\Encryption\Encrypter $crypt
         * @return void 
         * @static 
         */
        public static function setEncrypter($crypt){
            //Method inherited from \Illuminate\Queue\Queue            
            \Illuminate\Queue\SyncQueue::setEncrypter($crypt);
        }
        
    }


    class Redirect extends \Illuminate\Support\Facades\Redirect{
        
        /**
         * Create a new redirect response to the "home" route.
         *
         * @param int $status
         * @return \Illuminate\Http\RedirectResponse 
         * @static 
         */
        public static function home($status = 302){
            return \Illuminate\Routing\Redirector::home($status);
        }
        
        /**
         * Create a new redirect response to the previous location.
         *
         * @param int $status
         * @param array $headers
         * @return \Illuminate\Http\RedirectResponse 
         * @static 
         */
        public static function back($status = 302, $headers = array()){
            return \Illuminate\Routing\Redirector::back($status, $headers);
        }
        
        /**
         * Create a new redirect response to the current URI.
         *
         * @param int $status
         * @param array $headers
         * @return \Illuminate\Http\RedirectResponse 
         * @static 
         */
        public static function refresh($status = 302, $headers = array()){
            return \Illuminate\Routing\Redirector::refresh($status, $headers);
        }
        
        /**
         * Create a new redirect response, while putting the current URL in the session.
         *
         * @param string $path
         * @param int $status
         * @param array $headers
         * @param bool $secure
         * @return \Illuminate\Http\RedirectResponse 
         * @static 
         */
        public static function guest($path, $status = 302, $headers = array(), $secure = null){
            return \Illuminate\Routing\Redirector::guest($path, $status, $headers, $secure);
        }
        
        /**
         * Create a new redirect response to the previously intended location.
         *
         * @param string $default
         * @param int $status
         * @param array $headers
         * @param bool $secure
         * @return \Illuminate\Http\RedirectResponse 
         * @static 
         */
        public static function intended($default = '/', $status = 302, $headers = array(), $secure = null){
            return \Illuminate\Routing\Redirector::intended($default, $status, $headers, $secure);
        }
        
        /**
         * Create a new redirect response to the given path.
         *
         * @param string $path
         * @param int $status
         * @param array $headers
         * @param bool $secure
         * @return \Illuminate\Http\RedirectResponse 
         * @static 
         */
        public static function to($path, $status = 302, $headers = array(), $secure = null){
            return \Illuminate\Routing\Redirector::to($path, $status, $headers, $secure);
        }
        
        /**
         * Create a new redirect response to an external URL (no validation).
         *
         * @param string $path
         * @param int $status
         * @param array $headers
         * @return \Illuminate\Http\RedirectResponse 
         * @static 
         */
        public static function away($path, $status = 302, $headers = array()){
            return \Illuminate\Routing\Redirector::away($path, $status, $headers);
        }
        
        /**
         * Create a new redirect response to the given HTTPS path.
         *
         * @param string $path
         * @param int $status
         * @param array $headers
         * @return \Illuminate\Http\RedirectResponse 
         * @static 
         */
        public static function secure($path, $status = 302, $headers = array()){
            return \Illuminate\Routing\Redirector::secure($path, $status, $headers);
        }
        
        /**
         * Create a new redirect response to a named route.
         *
         * @param string $route
         * @param array $parameters
         * @param int $status
         * @param array $headers
         * @return \Illuminate\Http\RedirectResponse 
         * @static 
         */
        public static function route($route, $parameters = array(), $status = 302, $headers = array()){
            return \Illuminate\Routing\Redirector::route($route, $parameters, $status, $headers);
        }
        
        /**
         * Create a new redirect response to a controller action.
         *
         * @param string $action
         * @param array $parameters
         * @param int $status
         * @param array $headers
         * @return \Illuminate\Http\RedirectResponse 
         * @static 
         */
        public static function action($action, $parameters = array(), $status = 302, $headers = array()){
            return \Illuminate\Routing\Redirector::action($action, $parameters, $status, $headers);
        }
        
        /**
         * Get the URL generator instance.
         *
         * @return \Illuminate\Routing\UrlGenerator 
         * @static 
         */
        public static function getUrlGenerator(){
            return \Illuminate\Routing\Redirector::getUrlGenerator();
        }
        
        /**
         * Set the active session store.
         *
         * @param \Illuminate\Session\Store $session
         * @return void 
         * @static 
         */
        public static function setSession($session){
            \Illuminate\Routing\Redirector::setSession($session);
        }
        
    }


    class Redis extends \Illuminate\Support\Facades\Redis{
        
        /**
         * Get a specific Redis connection instance.
         *
         * @param string $name
         * @return \Predis\ClientInterface 
         * @static 
         */
        public static function connection($name = 'default'){
            return \Illuminate\Redis\Database::connection($name);
        }
        
        /**
         * Run a command against the Redis database.
         *
         * @param string $method
         * @param array $parameters
         * @return mixed 
         * @static 
         */
        public static function command($method, $parameters = array()){
            return \Illuminate\Redis\Database::command($method, $parameters);
        }
        
    }


    class Request extends \Illuminate\Support\Facades\Request{
        
        /**
         * 
         *
         * @static 
         */
        public static function instance(){
            return \Illuminate\Http\Request::instance();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function method(){
            return \Illuminate\Http\Request::method();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function root(){
            return \Illuminate\Http\Request::root();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function url(){
            return \Illuminate\Http\Request::url();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function fullUrl(){
            return \Illuminate\Http\Request::fullUrl();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function path(){
            return \Illuminate\Http\Request::path();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function decodedPath(){
            return \Illuminate\Http\Request::decodedPath();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function segment($index, $default = null){
            return \Illuminate\Http\Request::segment($index, $default);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function segments(){
            return \Illuminate\Http\Request::segments();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function is(){
            return \Illuminate\Http\Request::is();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function ajax(){
            return \Illuminate\Http\Request::ajax();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function secure(){
            return \Illuminate\Http\Request::secure();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function ip(){
            return \Illuminate\Http\Request::ip();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function ips(){
            return \Illuminate\Http\Request::ips();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function exists($key){
            return \Illuminate\Http\Request::exists($key);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function has($key){
            return \Illuminate\Http\Request::has($key);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function all(){
            return \Illuminate\Http\Request::all();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function input($key = null, $default = null){
            return \Illuminate\Http\Request::input($key, $default);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function only($keys){
            return \Illuminate\Http\Request::only($keys);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function except($keys){
            return \Illuminate\Http\Request::except($keys);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function query($key = null, $default = null){
            return \Illuminate\Http\Request::query($key, $default);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function hasCookie($key){
            return \Illuminate\Http\Request::hasCookie($key);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function cookie($key = null, $default = null){
            return \Illuminate\Http\Request::cookie($key, $default);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function file($key = null, $default = null){
            return \Illuminate\Http\Request::file($key, $default);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function hasFile($key){
            return \Illuminate\Http\Request::hasFile($key);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function header($key = null, $default = null){
            return \Illuminate\Http\Request::header($key, $default);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function server($key = null, $default = null){
            return \Illuminate\Http\Request::server($key, $default);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function old($key = null, $default = null){
            return \Illuminate\Http\Request::old($key, $default);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function flash($filter = null, $keys = array()){
            return \Illuminate\Http\Request::flash($filter, $keys);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function flashOnly($keys){
            return \Illuminate\Http\Request::flashOnly($keys);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function flashExcept($keys){
            return \Illuminate\Http\Request::flashExcept($keys);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function flush(){
            return \Illuminate\Http\Request::flush();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function merge($input){
            return \Illuminate\Http\Request::merge($input);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function replace($input){
            return \Illuminate\Http\Request::replace($input);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function json($key = null, $default = null){
            return \Illuminate\Http\Request::json($key, $default);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function isJson(){
            return \Illuminate\Http\Request::isJson();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function wantsJson(){
            return \Illuminate\Http\Request::wantsJson();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function format($default = 'html'){
            return \Illuminate\Http\Request::format($default);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function createFromBase($request){
            return \Illuminate\Http\Request::createFromBase($request);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function session(){
            return \Illuminate\Http\Request::session();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function user(){
            return \Illuminate\Http\Request::user();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function route(){
            return \Illuminate\Http\Request::route();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getUserResolver(){
            return \Illuminate\Http\Request::getUserResolver();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setUserResolver($callback){
            return \Illuminate\Http\Request::setUserResolver($callback);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getRouteResolver(){
            return \Illuminate\Http\Request::getRouteResolver();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setRouteResolver($callback){
            return \Illuminate\Http\Request::setRouteResolver($callback);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function initialize($query = array(), $request = array(), $attributes = array(), $cookies = array(), $files = array(), $server = array(), $content = null){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::initialize($query, $request, $attributes, $cookies, $files, $server, $content);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function createFromGlobals(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::createFromGlobals();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function create($uri, $method = 'GET', $parameters = array(), $cookies = array(), $files = array(), $server = array(), $content = null){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::create($uri, $method, $parameters, $cookies, $files, $server, $content);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setFactory($callable){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::setFactory($callable);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function duplicate($query = null, $request = null, $attributes = null, $cookies = null, $files = null, $server = null){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::duplicate($query, $request, $attributes, $cookies, $files, $server);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function overrideGlobals(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::overrideGlobals();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setTrustedProxies($proxies){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::setTrustedProxies($proxies);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getTrustedProxies(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getTrustedProxies();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setTrustedHosts($hostPatterns){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::setTrustedHosts($hostPatterns);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getTrustedHosts(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getTrustedHosts();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setTrustedHeaderName($key, $value){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::setTrustedHeaderName($key, $value);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getTrustedHeaderName($key){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getTrustedHeaderName($key);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function normalizeQueryString($qs){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::normalizeQueryString($qs);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function enableHttpMethodParameterOverride(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::enableHttpMethodParameterOverride();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getHttpMethodParameterOverride(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getHttpMethodParameterOverride();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function get($key, $default = null, $deep = false){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::get($key, $default, $deep);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getSession(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getSession();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function hasPreviousSession(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::hasPreviousSession();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function hasSession(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::hasSession();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setSession($session){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::setSession($session);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getClientIps(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getClientIps();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getClientIp(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getClientIp();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getScriptName(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getScriptName();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getPathInfo(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getPathInfo();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getBasePath(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getBasePath();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getBaseUrl(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getBaseUrl();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getScheme(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getScheme();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getPort(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getPort();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getUser(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getUser();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getPassword(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getPassword();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getUserInfo(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getUserInfo();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getHttpHost(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getHttpHost();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getRequestUri(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getRequestUri();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getSchemeAndHttpHost(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getSchemeAndHttpHost();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getUri(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getUri();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getUriForPath($path){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getUriForPath($path);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getQueryString(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getQueryString();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function isSecure(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::isSecure();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getHost(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getHost();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setMethod($method){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::setMethod($method);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getMethod(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getMethod();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getRealMethod(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getRealMethod();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getMimeType($format){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getMimeType($format);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getFormat($mimeType){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getFormat($mimeType);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setFormat($format, $mimeTypes){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::setFormat($format, $mimeTypes);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getRequestFormat($default = 'html'){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getRequestFormat($default);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setRequestFormat($format){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::setRequestFormat($format);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getContentType(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getContentType();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setDefaultLocale($locale){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::setDefaultLocale($locale);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getDefaultLocale(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getDefaultLocale();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setLocale($locale){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::setLocale($locale);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getLocale(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getLocale();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function isMethod($method){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::isMethod($method);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function isMethodSafe(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::isMethodSafe();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getContent($asResource = false){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getContent($asResource);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getETags(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getETags();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function isNoCache(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::isNoCache();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getPreferredLanguage($locales = null){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getPreferredLanguage($locales);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getLanguages(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getLanguages();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getCharsets(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getCharsets();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getEncodings(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getEncodings();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getAcceptableContentTypes(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getAcceptableContentTypes();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function isXmlHttpRequest(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::isXmlHttpRequest();
        }
        
    }


    class Response extends \Illuminate\Support\Facades\Response{
        
        /**
         * Return a new response from the application.
         *
         * @param string $content
         * @param int $status
         * @param array $headers
         * @return \Symfony\Component\HttpFoundation\Response 
         * @static 
         */
        public static function make($content = '', $status = 200, $headers = array()){
            return \Illuminate\Routing\ResponseFactory::make($content, $status, $headers);
        }
        
        /**
         * Return a new view response from the application.
         *
         * @param string $view
         * @param array $data
         * @param int $status
         * @param array $headers
         * @return \Symfony\Component\HttpFoundation\Response 
         * @static 
         */
        public static function view($view, $data = array(), $status = 200, $headers = array()){
            return \Illuminate\Routing\ResponseFactory::view($view, $data, $status, $headers);
        }
        
        /**
         * Return a new JSON response from the application.
         *
         * @param string|array $data
         * @param int $status
         * @param array $headers
         * @param int $options
         * @return \Symfony\Component\HttpFoundation\Response 
         * @static 
         */
        public static function json($data = array(), $status = 200, $headers = array(), $options = 0){
            return \Illuminate\Routing\ResponseFactory::json($data, $status, $headers, $options);
        }
        
        /**
         * Return a new JSONP response from the application.
         *
         * @param string $callback
         * @param string|array $data
         * @param int $status
         * @param array $headers
         * @param int $options
         * @return \Symfony\Component\HttpFoundation\Response 
         * @static 
         */
        public static function jsonp($callback, $data = array(), $status = 200, $headers = array(), $options = 0){
            return \Illuminate\Routing\ResponseFactory::jsonp($callback, $data, $status, $headers, $options);
        }
        
        /**
         * Return a new streamed response from the application.
         *
         * @param \Closure $callback
         * @param int $status
         * @param array $headers
         * @return \Symfony\Component\HttpFoundation\StreamedResponse 
         * @static 
         */
        public static function stream($callback, $status = 200, $headers = array()){
            return \Illuminate\Routing\ResponseFactory::stream($callback, $status, $headers);
        }
        
        /**
         * Create a new file download response.
         *
         * @param \SplFileInfo|string $file
         * @param string $name
         * @param array $headers
         * @param null|string $disposition
         * @return \Symfony\Component\HttpFoundation\BinaryFileResponse 
         * @static 
         */
        public static function download($file, $name = null, $headers = array(), $disposition = 'attachment'){
            return \Illuminate\Routing\ResponseFactory::download($file, $name, $headers, $disposition);
        }
        
        /**
         * Create a new redirect response to the given path.
         *
         * @param string $path
         * @param int $status
         * @param array $headers
         * @param bool $secure
         * @return \Symfony\Component\HttpFoundation\Response 
         * @static 
         */
        public static function redirectTo($path, $status = 302, $headers = array(), $secure = null){
            return \Illuminate\Routing\ResponseFactory::redirectTo($path, $status, $headers, $secure);
        }
        
        /**
         * Create a new redirect response to a named route.
         *
         * @param string $route
         * @param array $parameters
         * @param int $status
         * @param array $headers
         * @return \Symfony\Component\HttpFoundation\Response 
         * @static 
         */
        public static function redirectToRoute($route, $parameters = array(), $status = 302, $headers = array()){
            return \Illuminate\Routing\ResponseFactory::redirectToRoute($route, $parameters, $status, $headers);
        }
        
        /**
         * Create a new redirect response to a controller action.
         *
         * @param string $action
         * @param array $parameters
         * @param int $status
         * @param array $headers
         * @return \Symfony\Component\HttpFoundation\Response 
         * @static 
         */
        public static function redirectToAction($action, $parameters = array(), $status = 302, $headers = array()){
            return \Illuminate\Routing\ResponseFactory::redirectToAction($action, $parameters, $status, $headers);
        }
        
        /**
         * Create a new redirect response, while putting the current URL in the session.
         *
         * @param string $path
         * @param int $status
         * @param array $headers
         * @param bool $secure
         * @return \Symfony\Component\HttpFoundation\Response 
         * @static 
         */
        public static function redirectGuest($path, $status = 302, $headers = array(), $secure = null){
            return \Illuminate\Routing\ResponseFactory::redirectGuest($path, $status, $headers, $secure);
        }
        
        /**
         * Create a new redirect response to the previously intended location.
         *
         * @param string $default
         * @param int $status
         * @param array $headers
         * @param bool $secure
         * @return \Symfony\Component\HttpFoundation\Response 
         * @static 
         */
        public static function redirectToIntended($default = '/', $status = 302, $headers = array(), $secure = null){
            return \Illuminate\Routing\ResponseFactory::redirectToIntended($default, $status, $headers, $secure);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function macro($name, $macro){
            return \Illuminate\Routing\ResponseFactory::macro($name, $macro);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function hasMacro($name){
            return \Illuminate\Routing\ResponseFactory::hasMacro($name);
        }
        
    }


    class Route extends \Illuminate\Support\Facades\Route{
        
        /**
         * 
         *
         * @static 
         */
        public static function get($uri, $action){
            return \Illuminate\Routing\Router::get($uri, $action);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function post($uri, $action){
            return \Illuminate\Routing\Router::post($uri, $action);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function put($uri, $action){
            return \Illuminate\Routing\Router::put($uri, $action);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function patch($uri, $action){
            return \Illuminate\Routing\Router::patch($uri, $action);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function delete($uri, $action){
            return \Illuminate\Routing\Router::delete($uri, $action);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function options($uri, $action){
            return \Illuminate\Routing\Router::options($uri, $action);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function any($uri, $action){
            return \Illuminate\Routing\Router::any($uri, $action);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function match($methods, $uri, $action){
            return \Illuminate\Routing\Router::match($methods, $uri, $action);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function resource($name, $controller, $options = array()){
            return \Illuminate\Routing\Router::resource($name, $controller, $options);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function group($attributes, $callback){
            return \Illuminate\Routing\Router::group($attributes, $callback);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function mergeWithLastGroup($new){
            return \Illuminate\Routing\Router::mergeWithLastGroup($new);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function mergeGroup($new, $old){
            return \Illuminate\Routing\Router::mergeGroup($new, $old);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getLastGroupPrefix(){
            return \Illuminate\Routing\Router::getLastGroupPrefix();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function dispatch($request, $runMiddleware = true){
            return \Illuminate\Routing\Router::dispatch($request, $runMiddleware);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function dispatchWithoutMiddleware($request){
            return \Illuminate\Routing\Router::dispatchWithoutMiddleware($request);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function dispatchToRoute($request, $runMiddleware = true){
            return \Illuminate\Routing\Router::dispatchToRoute($request, $runMiddleware);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function matched($callback){
            return \Illuminate\Routing\Router::matched($callback);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function before($callback){
            return \Illuminate\Routing\Router::before($callback);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function after($callback){
            return \Illuminate\Routing\Router::after($callback);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getMiddleware(){
            return \Illuminate\Routing\Router::getMiddleware();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function middleware($name, $class){
            return \Illuminate\Routing\Router::middleware($name, $class);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function filter($name, $callback){
            return \Illuminate\Routing\Router::filter($name, $callback);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function when($pattern, $name, $methods = null){
            return \Illuminate\Routing\Router::when($pattern, $name, $methods);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function whenRegex($pattern, $name, $methods = null){
            return \Illuminate\Routing\Router::whenRegex($pattern, $name, $methods);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function model($key, $class, $callback = null){
            return \Illuminate\Routing\Router::model($key, $class, $callback);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function bind($key, $binder){
            return \Illuminate\Routing\Router::bind($key, $binder);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function createClassBinding($binding){
            return \Illuminate\Routing\Router::createClassBinding($binding);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function pattern($key, $pattern){
            return \Illuminate\Routing\Router::pattern($key, $pattern);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function patterns($patterns){
            return \Illuminate\Routing\Router::patterns($patterns);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function callRouteBefore($route, $request){
            return \Illuminate\Routing\Router::callRouteBefore($route, $request);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function findPatternFilters($request){
            return \Illuminate\Routing\Router::findPatternFilters($request);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function callRouteAfter($route, $request, $response){
            return \Illuminate\Routing\Router::callRouteAfter($route, $request, $response);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function callRouteFilter($filter, $parameters, $route, $request, $response = null){
            return \Illuminate\Routing\Router::callRouteFilter($filter, $parameters, $route, $request, $response);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function hasGroupStack(){
            return \Illuminate\Routing\Router::hasGroupStack();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getGroupStack(){
            return \Illuminate\Routing\Router::getGroupStack();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function input($key, $default = null){
            return \Illuminate\Routing\Router::input($key, $default);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getCurrentRoute(){
            return \Illuminate\Routing\Router::getCurrentRoute();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function current(){
            return \Illuminate\Routing\Router::current();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function has($name){
            return \Illuminate\Routing\Router::has($name);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function currentRouteName(){
            return \Illuminate\Routing\Router::currentRouteName();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function is(){
            return \Illuminate\Routing\Router::is();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function currentRouteNamed($name){
            return \Illuminate\Routing\Router::currentRouteNamed($name);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function currentRouteAction(){
            return \Illuminate\Routing\Router::currentRouteAction();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function uses(){
            return \Illuminate\Routing\Router::uses();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function currentRouteUses($action){
            return \Illuminate\Routing\Router::currentRouteUses($action);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getCurrentRequest(){
            return \Illuminate\Routing\Router::getCurrentRequest();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getRoutes(){
            return \Illuminate\Routing\Router::getRoutes();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setRoutes($routes){
            return \Illuminate\Routing\Router::setRoutes($routes);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getPatterns(){
            return \Illuminate\Routing\Router::getPatterns();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function handle($request, $type = 1, $catch = true){
            return \Illuminate\Routing\Router::handle($request, $type, $catch);
        }
        
    }


    class Session extends \Illuminate\Support\Facades\Session{
        
        /**
         * 
         *
         * @static 
         */
        public static function getSessionConfig(){
            return \Illuminate\Session\SessionManager::getSessionConfig();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getDefaultDriver(){
            return \Illuminate\Session\SessionManager::getDefaultDriver();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setDefaultDriver($name){
            return \Illuminate\Session\SessionManager::setDefaultDriver($name);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function driver($driver = null){
            //Method inherited from \Illuminate\Support\Manager            
            return \Illuminate\Session\SessionManager::driver($driver);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function extend($driver, $callback){
            //Method inherited from \Illuminate\Support\Manager            
            return \Illuminate\Session\SessionManager::extend($driver, $callback);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getDrivers(){
            //Method inherited from \Illuminate\Support\Manager            
            return \Illuminate\Session\SessionManager::getDrivers();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function start(){
            return \Illuminate\Session\Store::start();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getId(){
            return \Illuminate\Session\Store::getId();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setId($id){
            return \Illuminate\Session\Store::setId($id);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function isValidId($id){
            return \Illuminate\Session\Store::isValidId($id);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getName(){
            return \Illuminate\Session\Store::getName();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setName($name){
            return \Illuminate\Session\Store::setName($name);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function invalidate($lifetime = null){
            return \Illuminate\Session\Store::invalidate($lifetime);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function migrate($destroy = false, $lifetime = null){
            return \Illuminate\Session\Store::migrate($destroy, $lifetime);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function regenerate($destroy = false){
            return \Illuminate\Session\Store::regenerate($destroy);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function save(){
            return \Illuminate\Session\Store::save();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function ageFlashData(){
            return \Illuminate\Session\Store::ageFlashData();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function has($name){
            return \Illuminate\Session\Store::has($name);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function get($name, $default = null){
            return \Illuminate\Session\Store::get($name, $default);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function pull($key, $default = null){
            return \Illuminate\Session\Store::pull($key, $default);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function hasOldInput($key = null){
            return \Illuminate\Session\Store::hasOldInput($key);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getOldInput($key = null, $default = null){
            return \Illuminate\Session\Store::getOldInput($key, $default);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function set($name, $value){
            return \Illuminate\Session\Store::set($name, $value);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function put($key, $value = null){
            return \Illuminate\Session\Store::put($key, $value);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function push($key, $value){
            return \Illuminate\Session\Store::push($key, $value);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function flash($key, $value){
            return \Illuminate\Session\Store::flash($key, $value);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function flashInput($value){
            return \Illuminate\Session\Store::flashInput($value);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function reflash(){
            return \Illuminate\Session\Store::reflash();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function keep($keys = null){
            return \Illuminate\Session\Store::keep($keys);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function all(){
            return \Illuminate\Session\Store::all();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function replace($attributes){
            return \Illuminate\Session\Store::replace($attributes);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function remove($name){
            return \Illuminate\Session\Store::remove($name);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function forget($key){
            return \Illuminate\Session\Store::forget($key);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function clear(){
            return \Illuminate\Session\Store::clear();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function flush(){
            return \Illuminate\Session\Store::flush();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function isStarted(){
            return \Illuminate\Session\Store::isStarted();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function registerBag($bag){
            return \Illuminate\Session\Store::registerBag($bag);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getBag($name){
            return \Illuminate\Session\Store::getBag($name);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getMetadataBag(){
            return \Illuminate\Session\Store::getMetadataBag();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getBagData($name){
            return \Illuminate\Session\Store::getBagData($name);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function token(){
            return \Illuminate\Session\Store::token();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getToken(){
            return \Illuminate\Session\Store::getToken();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function regenerateToken(){
            return \Illuminate\Session\Store::regenerateToken();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setExists($value){
            return \Illuminate\Session\Store::setExists($value);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getHandler(){
            return \Illuminate\Session\Store::getHandler();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function handlerNeedsRequest(){
            return \Illuminate\Session\Store::handlerNeedsRequest();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setRequestOnHandler($request){
            return \Illuminate\Session\Store::setRequestOnHandler($request);
        }
        
    }


    class URL extends \Illuminate\Support\Facades\URL{
        
        /**
         * 
         *
         * @static 
         */
        public static function full(){
            return \Illuminate\Routing\UrlGenerator::full();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function current(){
            return \Illuminate\Routing\UrlGenerator::current();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function previous(){
            return \Illuminate\Routing\UrlGenerator::previous();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function to($path, $extra = array(), $secure = null){
            return \Illuminate\Routing\UrlGenerator::to($path, $extra, $secure);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function secure($path, $parameters = array()){
            return \Illuminate\Routing\UrlGenerator::secure($path, $parameters);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function asset($path, $secure = null){
            return \Illuminate\Routing\UrlGenerator::asset($path, $secure);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function secureAsset($path){
            return \Illuminate\Routing\UrlGenerator::secureAsset($path);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function forceSchema($schema){
            return \Illuminate\Routing\UrlGenerator::forceSchema($schema);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function route($name, $parameters = array(), $absolute = true){
            return \Illuminate\Routing\UrlGenerator::route($name, $parameters, $absolute);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function action($action, $parameters = array(), $absolute = true){
            return \Illuminate\Routing\UrlGenerator::action($action, $parameters, $absolute);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function forceRootUrl($root){
            return \Illuminate\Routing\UrlGenerator::forceRootUrl($root);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function isValidUrl($path){
            return \Illuminate\Routing\UrlGenerator::isValidUrl($path);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getRequest(){
            return \Illuminate\Routing\UrlGenerator::getRequest();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setRequest($request){
            return \Illuminate\Routing\UrlGenerator::setRequest($request);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setRoutes($routes){
            return \Illuminate\Routing\UrlGenerator::setRoutes($routes);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setRootControllerNamespace($rootNamespace){
            return \Illuminate\Routing\UrlGenerator::setRootControllerNamespace($rootNamespace);
        }
        
    }


    class Validator extends \Illuminate\Support\Facades\Validator{
        
        /**
         * Create a new Validator instance.
         *
         * @param array $data
         * @param array $rules
         * @param array $messages
         * @param array $customAttributes
         * @return \Illuminate\Validation\Validator 
         * @static 
         */
        public static function make($data, $rules, $messages = array(), $customAttributes = array()){
            return \Illuminate\Validation\Factory::make($data, $rules, $messages, $customAttributes);
        }
        
        /**
         * Register a custom validator extension.
         *
         * @param string $rule
         * @param \Closure|string $extension
         * @param string $message
         * @return void 
         * @static 
         */
        public static function extend($rule, $extension, $message = null){
            \Illuminate\Validation\Factory::extend($rule, $extension, $message);
        }
        
        /**
         * Register a custom implicit validator extension.
         *
         * @param string $rule
         * @param \Closure|string $extension
         * @param string $message
         * @return void 
         * @static 
         */
        public static function extendImplicit($rule, $extension, $message = null){
            \Illuminate\Validation\Factory::extendImplicit($rule, $extension, $message);
        }
        
        /**
         * Register a custom implicit validator message replacer.
         *
         * @param string $rule
         * @param \Closure|string $replacer
         * @return void 
         * @static 
         */
        public static function replacer($rule, $replacer){
            \Illuminate\Validation\Factory::replacer($rule, $replacer);
        }
        
        /**
         * Set the Validator instance resolver.
         *
         * @param \Closure $resolver
         * @return void 
         * @static 
         */
        public static function resolver($resolver){
            \Illuminate\Validation\Factory::resolver($resolver);
        }
        
        /**
         * Get the Translator implementation.
         *
         * @return \Symfony\Component\Translation\TranslatorInterface 
         * @static 
         */
        public static function getTranslator(){
            return \Illuminate\Validation\Factory::getTranslator();
        }
        
        /**
         * Get the Presence Verifier implementation.
         *
         * @return \Illuminate\Validation\PresenceVerifierInterface 
         * @static 
         */
        public static function getPresenceVerifier(){
            return \Illuminate\Validation\Factory::getPresenceVerifier();
        }
        
        /**
         * Set the Presence Verifier implementation.
         *
         * @param \Illuminate\Validation\PresenceVerifierInterface $presenceVerifier
         * @return void 
         * @static 
         */
        public static function setPresenceVerifier($presenceVerifier){
            \Illuminate\Validation\Factory::setPresenceVerifier($presenceVerifier);
        }
        
    }


    class View extends \Illuminate\Support\Facades\View{
        
        /**
         * 
         *
         * @static 
         */
        public static function make($view, $data = array(), $mergeData = array()){
            return \Illuminate\View\Factory::make($view, $data, $mergeData);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function of($view, $data = array()){
            return \Illuminate\View\Factory::of($view, $data);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function name($view, $name){
            return \Illuminate\View\Factory::name($view, $name);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function alias($view, $alias){
            return \Illuminate\View\Factory::alias($view, $alias);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function exists($view){
            return \Illuminate\View\Factory::exists($view);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function renderEach($view, $data, $iterator, $empty = 'raw|'){
            return \Illuminate\View\Factory::renderEach($view, $data, $iterator, $empty);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getEngineFromPath($path){
            return \Illuminate\View\Factory::getEngineFromPath($path);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function share($key, $value = null){
            return \Illuminate\View\Factory::share($key, $value);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function creator($views, $callback){
            return \Illuminate\View\Factory::creator($views, $callback);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function composers($composers){
            return \Illuminate\View\Factory::composers($composers);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function composer($views, $callback, $priority = null){
            return \Illuminate\View\Factory::composer($views, $callback, $priority);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function callComposer($view){
            return \Illuminate\View\Factory::callComposer($view);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function callCreator($view){
            return \Illuminate\View\Factory::callCreator($view);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function startSection($section, $content = ''){
            return \Illuminate\View\Factory::startSection($section, $content);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function inject($section, $content){
            return \Illuminate\View\Factory::inject($section, $content);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function yieldSection(){
            return \Illuminate\View\Factory::yieldSection();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function stopSection($overwrite = false){
            return \Illuminate\View\Factory::stopSection($overwrite);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function appendSection(){
            return \Illuminate\View\Factory::appendSection();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function yieldContent($section, $default = ''){
            return \Illuminate\View\Factory::yieldContent($section, $default);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function flushSections(){
            return \Illuminate\View\Factory::flushSections();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function flushSectionsIfDoneRendering(){
            return \Illuminate\View\Factory::flushSectionsIfDoneRendering();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function incrementRender(){
            return \Illuminate\View\Factory::incrementRender();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function decrementRender(){
            return \Illuminate\View\Factory::decrementRender();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function doneRendering(){
            return \Illuminate\View\Factory::doneRendering();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function addLocation($location){
            return \Illuminate\View\Factory::addLocation($location);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function addNamespace($namespace, $hints){
            return \Illuminate\View\Factory::addNamespace($namespace, $hints);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function prependNamespace($namespace, $hints){
            return \Illuminate\View\Factory::prependNamespace($namespace, $hints);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function addExtension($extension, $engine, $resolver = null){
            return \Illuminate\View\Factory::addExtension($extension, $engine, $resolver);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getExtensions(){
            return \Illuminate\View\Factory::getExtensions();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getEngineResolver(){
            return \Illuminate\View\Factory::getEngineResolver();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getFinder(){
            return \Illuminate\View\Factory::getFinder();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setFinder($finder){
            return \Illuminate\View\Factory::setFinder($finder);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getDispatcher(){
            return \Illuminate\View\Factory::getDispatcher();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setDispatcher($events){
            return \Illuminate\View\Factory::setDispatcher($events);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getContainer(){
            return \Illuminate\View\Factory::getContainer();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setContainer($container){
            return \Illuminate\View\Factory::setContainer($container);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function shared($key, $default = null){
            return \Illuminate\View\Factory::shared($key, $default);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getShared(){
            return \Illuminate\View\Factory::getShared();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getSections(){
            return \Illuminate\View\Factory::getSections();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getNames(){
            return \Illuminate\View\Factory::getNames();
        }
        
    }


}

